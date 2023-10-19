<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\PackageService;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\PackageRepositoryInterface',
            'App\Repositories\PackageRepository'
        );
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
