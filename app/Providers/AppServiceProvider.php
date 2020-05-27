<?php

namespace App\Providers;
use View;
use App\Category;
use App\Tag;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view)
        {
            $allcategories = Category::all();
            $tags = Tag::all();
            $view->with(compact('allcategories', 'tags'));



        });
    }
}
