<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function() {
            Route::middleware(['web'])
                ->prefix('backoffice')
                ->namespace('App\Http\Controllers\Backoffice')
                ->name('backoffice.')
                ->group(base_path('routes/backoffice.php'));
            Route::middleware(['web'])
                ->namespace('App\Http\Controllers\Site')
                ->name('site.')
                ->group(base_path('routes/site.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
