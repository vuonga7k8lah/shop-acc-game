<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\CategoryType;
use App\Models\Image;
use Illuminate\Http\Request;


class CategoriesController extends Controller
{
    public function listView()
    {
        $aData = [];
        $aRawData = CategoryType::query()
            ->orderBy('id')
            ->paginate('2');
        if (empty($aData)) {
            foreach ($aRawData as $item) {
                $url = Image::query()->where([
                    'id' => (int)$item->image,
                ])->first('url')->url;
                $aData[] = [
                    'id'    => $item->id,
                    'url'   => $url,
                    'desc'  => $item->desc,
                    'name'  => $item->category_type_name,
                    'count' => 1,
                ];
            }
        }

        return view('Admin.Categories.list', [
            'data'     => $aData,
            'paginate' => $aRawData
        ]);
    }

    public function addView()
    {
        return view('Admin.Categories.add');
    }

    public function actionAdd(CategoryRequest $request)
    {
        $image = $request->file('fileName');
        $image->extension();
        $oImage = $image->move(public_path('images'), $image->getClientOriginalName());
        $imageModel = new Image();
        $imageModel->name = $oImage->getFilename();
        $imageModel->url = $oImage->getFilename();
        $imageModel->desc = $oImage->getFilename();
        $imageModel->save();


        $oCategoryType = new CategoryType();
        $oCategoryType->category_type_name = $request->get('name');
        $oCategoryType->desc = $request->get('desc');
        $oCategoryType->image = $imageModel->id;
        $oCategoryType->save();

        return redirect(route('list'));
    }

    public function editView(string $id)
    {
        $data = CategoryType::find($id);
        $data['url'] = Image::query()->where([
            'id' => (int)$data->image,
        ])->first('url')->url;
        $data['imgId'] = $data->image;
        $data['id'] = $id;
        return view('Admin.Categories.edit', [
            'data' => $data
        ]);
    }

    public function actionEdit(Request $request)
    {

        $image = $request->file('fileName');
        if (isset($image)) {
            $image->extension();
            $oImage = $image->move(public_path('images'), $image->getClientOriginalName());
            $imageModel = new Image();
            $imageModel->name = $oImage->getFilename();
            $imageModel->url = $oImage->getFilename();
            $imageModel->desc = $oImage->getFilename();
            $imageModel->save();
        }


        $oCategoryType = new CategoryType();

        $oCategoryType->category_type_name = $request->get('name');
        $oCategoryType->desc = $request->get('desc');

        if (isset($imageModel->id)) {
            $oCategoryType->image = $imageModel->id;
        } else {
            $oCategoryType->image = $request->get('oldImageId');
        }

        CategoryType::where('id', $request->get('id'))->update($oCategoryType->toArray());

        return redirect(route('list'));
    }

    public function actionDelete(string $id)
    {
        $game = CategoryType::findOrFail($id);
        $game->delete();

        return redirect(route('list'));
    }
}
