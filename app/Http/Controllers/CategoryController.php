<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Http\Resources\CategoryRes;
use App\Models\Category;
use App\Repository\Category\CategoryRepository;
use App\Repository\Category\EloquentCategory;
use Illuminate\Http\Request;


class CategoryController extends Controller
{




    public function  __construct(CategoryRepository $category)
    {
        $this->category=$category;
    }
    public function getAllCategories()
    {
        return $this->category->getAll();
    }
    public function getByIdCategories($id)
    {
        return $this->category->getById($id);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return CategoryRes::collection(Category::with('category')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return CategoryRes
     */
    public function store(CategoryStoreRequest  $request)
    {
        $created_category=Category::create($request->validated());
        return  new CategoryRes( $created_category);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return CategoryRes
     */
    public function show( $id)
    {
        return new CategoryRes(Category::with('category')->findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
