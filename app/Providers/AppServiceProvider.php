<?php

namespace App\Providers;

use App\Repository\Article\ArticleRepository;
use App\Repository\Article\EloquentArticle;
use App\Repository\Category\CategoryRepository;
use App\Repository\Category\EloquentCategory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CategoryRepository::class,EloquentCategory::class);
        $this->app->singleton(ArticleRepository::class,EloquentArticle::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
