<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::middlewareGroup('role:superadmin', [
            \App\Http\Middleware\RoleMiddleware::class,
        ]);

        Route::middlewareGroup('role:laborat', [
            \App\Http\Middleware\RoleMiddleware::class,
        ]);

        Route::middlewareGroup('role:dokter', [
            \App\Http\Middleware\RoleMiddleware::class,
        ]);

        Route::middlewareGroup('role:pasien', [
            \App\Http\Middleware\RoleMiddleware::class,
        ]);
    }
}
