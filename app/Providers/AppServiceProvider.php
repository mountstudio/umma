<?php

namespace App\Providers;

use App\Article;
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
        $articles_for_subblock = Article::where('is_active', true)->where('type', 'article')->latest()->take(9)->get();
        view()->composer('blocks.right-sidebar.new', function ($view) use ($articles_for_subblock) {
            $view->with('articles_for_subblock', $articles_for_subblock);
        });
        view()->composer('blocks.right-sidebar.animation', function ($view) {
            $view->with('data');
        });
    }
}
