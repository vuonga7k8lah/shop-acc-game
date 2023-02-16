<?php

namespace App\Repositories\Eloquents;

use App\Contructs\Repositories\BaseRepository;
use App\Models\Product;

class ProductRepository implements BaseRepository
{
    protected $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return $this->model->paginate();
    }

    public function store($data = [])
    {
        return $this->model->create($data);
    }

    public function update($id, $data = [])
    {
        $record = $this->model->findOrFail($id);

        return $record->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    public function all()
    {
        return Product::all();
    }

    public function findByParam(string $param)
    {
        return $this->model->getAttribute($param);
    }
}
