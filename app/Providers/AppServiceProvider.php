<?php

namespace App\Providers;

use App\Article;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Blade;
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
        /**
         * Paginate a standard Laravel Collection.
         *
         * @param int $perPage
         * @param int $total
         * @param int $page
         * @param string $pageName
         * @return array
         */
        Collection::macro('paginate', function ($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);
            return new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });
        Blade::if('admin', function () {
            if (request()->user()) {
                return request()->user()->isAdmin();
            }
            return false;
        });
        $articles_for_subblock = Article::where('is_active', true)->where('type', 'article')->latest()->take(9)->get();
        view()->composer('blocks.right-sidebar.new', function ($view) use ($articles_for_subblock) {
            $view->with('articles_for_subblock', $articles_for_subblock);
        });
        setlocale(LC_TIME, 'ru_RU.UTF-8');
    }
}
