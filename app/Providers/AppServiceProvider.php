<?php

namespace App\Providers;

use App\Http\Controllers\TimePrayersController;
use App\Multimedia;
use App\Observers\MultimediaObserver;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Controller;

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
        view()->composer('blocks.right-sidebar.animation', function($view) {

            $view->with('data');
        });

        Multimedia::observe(MultimediaObserver::class);
    }
}
