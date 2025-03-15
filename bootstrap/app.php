<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AuthorizedMiddleware;
use App\Http\Middleware\GuestMiddleware;
use App\Http\Middleware\AdminMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'authorized' => AuthorizedMiddleware::class, //this is the line that assigns the AuthorizedMiddleware to the alias 'authorized'
            'is_guest' => GuestMiddleware::class, //this is the line that assigns the GuestMiddleware to the alias 'is_guest'
            'admin' => AdminMiddleware::class, //this is the line that assigns the AdminMiddleware to the alias 'admin'
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
