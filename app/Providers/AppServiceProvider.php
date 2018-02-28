<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        Schema::defaultStringLength(191);

        Route::model('categoria', 'App\Categoria::class');
        Route::model('producto', 'App\Producto::class');

        Route::bind('categoria', function($value) {
            return \App\Categoria::whereSlug($value)->first();
        });
        Route::bind('producto', function($value) {
            return \App\Producto::whereSlug($value)->first();
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
