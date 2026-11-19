<?php

use App\Http\Middleware\Admin;
use App\Http\Middleware\Guest;
use App\Http\Middleware\Languege;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
        'Languege'  => App\Http\Middleware\Languege::class,
        'Admin'  => App\Http\Middleware\Admin::class,
        'Guest'  => App\Http\Middleware\Guest::class,
        ]);
        $middleware->append(App\Http\Middleware\Languege::class);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
