<?php

namespace App\Http\Controllers;

use App\Contructs\Repositories\BaseRepository;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Image;
use App\Models\Product;
use App\Repositories\Eloquents\CategoryProductRepository;
use App\Traits\ProductTags;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{
    use ProductTags;

    public $repository;
    public $categoryProduct;
    public $stringOption = '';

    public function __construct(BaseRepository $productRepository, CategoryProductRepository $categoryProductRepository)
    {
        $this->repository = $productRepository;
        $this->categoryProduct = $categoryProductRepository;
    }


    /**
     * @throws \Exception
     */
    public function apiDatatable()
    {
        $stt = 0;
        return Datatables::of(Product::query())
            ->editColumn('created_at', function ($object) {
                return $object->created_at->format('d/m/Y');
            })
            ->addColumn('stt', function () use (&$stt) {
                $stt++;
                return $stt;
            })
            ->addColumn('action', function ($object) {
                $id = $object->id;
                return '<a href="' . route('adminProduct.edit', $id) . '"
                            class="btn btn-simple btn-warning btn-icon edit">
                            <i class="ti-pencil-alt"></i>
                        </a>
                        <a href="' . route('adminProduct.destroy', $id) . '"
                            class="btn btn-simple btn-danger btn-icon remove">
                        <i class="ti-close"></i>
                        </a>';
            })
            ->addColumn('feature_image', function ($object) {
                $featureImageId = $object->feature_image_path;
                $image = Image::query()->find($featureImageId);
                return '
                <image src="' . asset('images\/' . $image->name ?? '') . '" style="width: 100px"></image>
                      ';
            })
            ->addColumn('gallery_image', function ($object) {
                $aGalleryImageId = explode(',', $object->gallery_image_id);
                $images = '';
                if (!empty($aGalleryImageId)) {
                    foreach ($aGalleryImageId as $id) {
                        if (!empty($id)) {
                            $oImage = Image::query()->find($id);
                            $images .= '
                            <div style="background-image: url(' . asset('images\/' .
                                    $oImage->name ?? '') .
                                ');"></div>';
                        }
                    }
                }
                return '
                        <div class="lhv-gallery">
                          ' . $images . '
                      </div>';
            })
            ->addColumn('category', function ($object) {
                $id = $object->category_id;
                return \App\Models\CategoryProduct::query()->find($id)->name ?? '';
            })
            ->addColumn('sku', function ($object) {
                return 1;
            })
            ->rawColumns(['action', 'feature_image', 'gallery_image', 'category'])
            ->orderColumns(['stt', 'title'], 'created_at')
            ->make(true);
    }

    public function index()
    {

        return view('Admin.Product.list');
    }

    public function create()
    {
        $aCategory = $this->categoryProduct->all()->toArray();
        $rawOption = '';

        if (!empty($aCategory)) {
            foreach ($aCategory as $aItem) {
                if ($aItem['parent_id'] == 0) {
                    $rawOption .= ' <option value="' . $aItem['id'] . '" >' . $aItem['name'] . '</option>';
                    $rawOption .= $this->handleDeepParents($aItem['id'], '-');
                }
            }
        }
        return view('Admin.Product.add', [
            'data' => $rawOption
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(StoreProductRequest $request)
    {
        try {
            DB::beginTransaction();
            $aData = $this->handleValidateParam($request);
            $oProduct = $this->repository->store($aData);
            $id = $oProduct->id;
            //handle add tags
            if (!empty($aData['tags'])) {
                foreach ($aData['tags'] as $tag) {
                    $this->handleCreateTags($tag, $id);
                }
            }
            DB::commit();
        }
        catch (\Exception $exception) {
            DB::rollBack();
            Log::error($exception->getMessage() . (" Line " + $exception->getLine()));
        }
        return redirect(route('adminProduct.index'));
    }

    public function handleUploadImage($image)
    {
        $image->extension();
        $oImage = $image->move(public_path('images'), $image->getClientOriginalName());
        $imageModel = new Image();
        $imageModel->name = $oImage->getFilename();
        $imageModel->url = $oImage->getFilename();
        $imageModel->desc = $oImage->getFilename();
        $imageModel->save();
        return $imageModel->id;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function show($id)
    {
        $this->repository->delete($id);
        return redirect(route('adminProduct.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $aData = $this->repository->show($id)->toArray();
        $aCategories = $this->categoryProduct->all()->toArray();
        $rawOption = '';
        $rawOptionSelect2 = [];

        if (!empty($aCategories)) {
            foreach ($aCategories as $aItem) {
                if ($aItem['parent_id'] == 0) {
                    $rawOption .= ' <option value="' . $aItem['id'] . '" >' . $aItem['name'] . '</option>';
                    $rawOption .= $this->handleDeepParents($aItem['id'], '-');
                }
            }
        }
        $aGalleryImageId = explode(',', $aData['gallery_image_id']);
        $aTags = explode(',', $aData['product_tags']);
        if (!empty($aTags)) {
            foreach ($aTags as $name) {
                $rawOptionSelect2[] = [
                    "id"       => $name,
                    "text"     => $name,
                    "selected" => true
                ];
            }

        }

        $aData['feature_image_path'] = $this->handleRenderImageHtml([$aData['feature_image_path']]);
        $aData['gallery_image_id'] = $this->handleRenderImageHtml($aGalleryImageId);
        $aData['options'] = $rawOption;
        $aData['product_tags'] = json_encode($rawOptionSelect2);

        return view('Admin.Product.edit', [
            'data' => $aData
        ]);
    }

    public function handleDeepParents($id, $text = '')
    {
        $aData = \App\Models\CategoryProduct::query()->where('parent_id', $id)->get()->toArray();
        if (!empty($aData)) {
            foreach ($aData as $item) {
                $this->stringOption .= ' <option value="' . $item['id'] . '" >' . $text . $item['name'] .
                    '</option>';
                $this->handleDeepParents($item['id'], $text . '-');
            }
            return $this->stringOption;
        }
    }

    public function handleRenderImageHtml(array $aGalleryImageId): string
    {
        $images = '';
        if (!empty($aGalleryImageId)) {
            foreach ($aGalleryImageId as $id) {
                if (!empty($id)) {
                    $oImage = Image::query()->find($id);
                    $images .= '
                            <div style="background-image: url(' . asset('images\/' .
                            $oImage->name) .
                        ');"></div>';
                }
            }
        }
        return ' <div class="lhv-gallery">
                          ' . $images . '
                      </div>';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $aData = $this->handleValidateParam($request);
        $this->repository->update($id, $aData);
        //handle add tags
        if (!empty($aData['tags'])) {
            foreach ($aData['tags'] as $tag) {
                $this->handleCreateTags($tag, $id);
            }
        }
        return redirect(route('adminProduct.index'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function handleValidateParam($request): array
    {

        $rawFeatureImage = $request->file('feature_image_path');
        $featureImage = '';

        if (!empty($rawFeatureImage)) {
            $featureImage = $this->handleUploadImage($rawFeatureImage);
        }
        $aGalleryImageId = [];
        $aRawGalleryImageId = $request->file('gallery_image_id');

        if (!empty($aRawGalleryImageId)) {
            foreach ($aRawGalleryImageId as $value) {
                $aGalleryImageId[] = $this->handleUploadImage($value);
            }
        }
        $aData = $request->all();
        if (!empty($featureImage)) {
            $aData['feature_image_path'] = $featureImage;
        }
        if (!empty($aGalleryImageId)) {
            $aData['gallery_image_id'] = implode(',', $aGalleryImageId);
        }

        $aData['user_id'] = Auth::id();
        $aData['product_tags'] = implode(',', $request->get('product_tags'));
        $aData['tags'] = $request->get('product_tags');

        return $aData;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
