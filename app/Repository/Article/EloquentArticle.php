<?php

namespace App\Repository\Article;
use App\Models\Article;


class EloquentArticle implements ArticleRepository
{
    private Article $model;

    public function  __construct(Article $model)
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
        $this->getById($id)->delete();
        return true;
    }

    private function findById($id)
    {
    }
}
