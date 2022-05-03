<?php

namespace App\Repository\Category;
use App\Http\Controllers\CategoryController;

use App\Models\Category;

class EloquentCategory implements CategoryRepository
{


    public function  __construct(Category $model)
    {
        $this->model =$model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->findById($id);
    }

    public function create(array $attributes)
    {
        return $this->model->create(array($attributes));
    }

    public function update($id, array $attributes)
    {
        $category=$this->model->findOrFail($id);
        $category->update($attributes);
        return $category;
    }

    public function delete($id)
    {
        $this->getById()->delete();
        return true;
    }

    private function findById($id)
    {
    }

}
