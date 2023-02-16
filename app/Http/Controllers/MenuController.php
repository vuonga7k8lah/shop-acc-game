<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Menu;
use App\Repositories\Eloquents\MenuRepository;
use Yajra\DataTables\DataTables;

class MenuController extends Controller
{

    public $repository;
    public $stringOption='';

    public function __construct(MenuRepository $menuRepository)
    {
        $this->repository = $menuRepository;
    }


    /**
     * @throws \Exception
     */
    public function apiDatatable()
    {
        return Datatables::of(Menu::query())
            ->editColumn('created_at', function ($object) {
                return $object->created_at->format('d/m/Y');
            })
            ->addColumn('action', function ($object) {
                $id = $object->id;
                return '<a href="' . route('adminMenu.edit', $id) . '"
                            class="btn btn-simple btn-warning btn-icon edit">
                            <i class="ti-pencil-alt"></i>
                        </a>
                        <a href="' . route('adminMenu.destroy', $id) . '"
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

        return view('Admin.Menu.list');
    }

    public function create()
    {
        $Menu = $this->repository->all()->toArray();
        $rawOption = '';

        if (!empty($Menu)) {
            foreach ($Menu as $aItem) {
                if ($aItem['parent_id']==0){
                    $rawOption .= ' <option value="'.$aItem['id'].'" >'.$aItem['name'].'</option>';
                    $rawOption.= $this->handleDeepParents($aItem['id'],'-');
                }
            }
        }
        return view('Admin.Menu.add', [
            'data' => $rawOption
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(StoreMenuRequest $request)
    {
        $this->repository->store($request->all());
        return redirect(route('adminMenu.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function show($id)
    {
        $this->repository->delete($id);
        return redirect(route('adminMenu.index'));
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

        return view('Admin.Menu.edit', [
            'data' => $aData
        ]);
    }

    public function handleDeepParents($id, $text = '')
    {
        $aData = Menu::query()->where('parent_id',$id)->get()->toArray();
        if (!empty($aData)){
            foreach ($aData as $item){
                $this->stringOption .= ' <option value="'.$item['id'].'" >'.$text.$item['name'].'</option>';
                $this->handleDeepParents($item['id'],$text.'-');
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
    public function update(UpdateMenuRequest $request, $id)
    {
        $this->repository->update($id, $request->all());
        return redirect(route('adminMenu.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
