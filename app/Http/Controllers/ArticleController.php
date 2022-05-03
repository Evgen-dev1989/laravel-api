<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleStoreRequest;
use App\Http\Resources\ArticleRes;
use App\Http\Resources\CategoryRes;
use App\Models\Article;
use App\Models\Category;
use App\Repository\Article\ArticleRepository;
use Illuminate\Http\Request;

class ArticleController extends Controller
{



    public function  __construct(ArticleRepository $article)
    {
        $this->article=$article;
    }
    public function getAllArticles()
    {
        return $this->article->getAll();
    }
    public function getByIdArticles($id)
    {
        return $this->article->getById($id);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return ArticleRes::collection(Article::with('article')->get());
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
     * @return ArticleRes
     */
    public function store(ArticleStoreRequest $request)
    {
        $created_article=Article::create($request->validated());
        return  new ArticleRes( $created_article);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return ArticleRes
     */
    public function show($id)
    {
        return new ArticleRes(Article::with('article')->findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
