<?php
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\Middleware;
use Illuminate\Foundation\Configuration\Exceptions;

return Application::configure(dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function ($middleware) {
        $middleware->append([
            'auth' => \App\Http\Middleware\Authentification::class,
            'role' => \App\Http\Middleware\RoleMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Gérer les exceptions ici si nécessaire
    })
    ->create();


