<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// 9.1: import Schema
use Illuminate\Support\Facades\Schema;

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
        // 9.2: Set String Length
        Schema::defaultStringLength(191);
    }
}
