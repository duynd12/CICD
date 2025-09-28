<?php

namespace App\Providers;

use App\Services\AnimalService;
use App\Services\TestService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('animal', function () {
            return new AnimalService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {}
}