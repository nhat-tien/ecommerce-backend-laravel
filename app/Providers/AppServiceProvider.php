<?php

namespace App\Providers;

use App\Http\Interfaces\AuthServiceInterface;
use App\Http\Services\AuthenticatedTokenService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AuthServiceInterface, function () {
            return new AuthenticatedTokenService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
