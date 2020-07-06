<?php

namespace App\Providers;

use App\Article;
use App\SiteText;
use Illuminate\Database\Schema\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
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
        Builder::defaultStringLength(191);
        /**
         * Paginate a standard Laravel Collection.
         *
         * @param int $perPage
         * @param int $total
         * @param int $page
         * @param string $pageName
         * @return array
         */
        setlocale(LC_TIME, 'ru_RU.UTF-8');
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

        if (Schema::hasTable('articles')) {
            $subblock = Article::where('lang', 'ru')->where('is_active', true)->where('type', 'article')->latest()->take(3)->get();
            $subblock_kg = Article::where('lang', 'kg')->where('is_active', true)->where('type', 'article')->latest()->take(3)->get();
            view()->composer('blocks.right-sidebar.new',
                function ($view) use ($subblock, $subblock_kg) {
                    $view->with(['subblock' => $subblock,
                        'subblock_kg' => $subblock_kg]);
                });
        }
        if (Schema::hasTable('site_texts')) {
            $mainText = SiteText::find(1);
            view()->composer('layouts.header',
                function ($view) use ($mainText) {
                    $view->with('mainText', $mainText);
                });
        }
    }
}
