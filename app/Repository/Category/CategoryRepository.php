<?php

namespace App\Repository\Category;

interface CategoryRepository
{
    public function  getAll();

    public function getById ($id);

    public function create (array $attributes);

    public function update($id,array $attributes);

    public function delete($id);
}
