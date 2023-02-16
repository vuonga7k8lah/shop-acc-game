<?php

namespace App\Http\Controllers;

use App\Contructs\Repositories\BaseRepository;
use App\Http\Requests\CategoryProductRequest;
use App\Repositories\Eloquents\CategoryProductRepository;
use Yajra\DataTables\DataTables;


class CategoryProduct extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public $repository;
    public  $stringOption = '';

    public function __construct(CategoryProductRepository $categoryProductRepository)
    {
        $this->repository = $categoryProductRepository;
    }

    /**
     * @throws \Exception
     */
    public function apiDatatable()
    {
        return Datatables::of(\App\Models\CategoryProduct::query())
            ->editColumn('created_at', function ($object) {
                return $object->created_at->format('d/m/Y');
            })
            ->addColumn('action', function ($category) {
                $id = $category->id;
                return '<a href="' . route('categoryProduct.edit', $id) . '"
                            class="btn btn-simple btn-warning btn-icon edit">
                            <i class="ti-pencil-alt"></i>
                        </a>
                        <a href="' . route('categoryProduct.destroy', $id) . '"
                            class="btn btn-simple btn-danger btn-icon remove">
                        <i class="ti-close"></i>
                        </a>';
            })
            ->rawColumns(['action'])
            ->orderColumns(['stt', 'name'], 'created_at')
            ->make(true);
    }

    public function index()
    {

        return view('Admin.CategoryProduct.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $aCategories = $this->repository->all()->toArray();
        $rawOption = '';

        if (!empty($aCategories)) {
            foreach ($aCategories as $aItem) {
                if ($aItem['parent_id']==0){
                    $rawOption .= ' <option value="'.$aItem['id'].'" >'.$aItem['name'].'</option>';
                    $rawOption.= $this->handleDeepParents($aItem['id'],'-');
                }
            }
        }
        return view('Admin.CategoryProduct.add', [
            'data' => $rawOption
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(CategoryProductRequest $request)
    {
        $this->repository->store($request->all());
        return redirect(route('categoryProduct.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function show($id)
    {
        $this->repository->delete($id);
        return redirect(route('categoryProduct.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $aData = $this->repository->show($id)->toArray();
        $aCategories = $this->repository->all()->toArray();
        $rawOption = '';

        if (!empty($aCategories)) {
            foreach ($aCategories as $aItem) {
                if ($aItem['parent_id']==0){
                    $rawOption .= ' <option value="'.$aItem['id'].'" >'.$aItem['name'].'</option>';
                    $rawOption.= $this->handleDeepParents($aItem['id'],'-');
                }
            }
        }
        $aData['options'] = $rawOption;

        return view('Admin.CategoryProduct.edit', [
            'data' => $aData
        ]);
    }

    public function handleDeepParents($categoryId, $text = '')
    {
        $aCategories = \App\Models\CategoryProduct::query()->where('parent_id',$categoryId)->get()->toArray();
        if (!empty($aCategories)){
            foreach ($aCategories as $category){
                $this->stringOption .= ' <option value="'.$category['id'].'" >'.$text.$category['name'].'</option>';
                $this->handleDeepParents($category['id'],$text.'-');
            }
            return $this->stringOption;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function update(CategoryProductRequest $request, $id)
    {
        $this->repository->update($id, $request->all());
        return redirect(route('categoryProduct.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect(route('categoryProduct.index'));
    }
}
