<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Foundation\Configuration\Exceptions;

return Application::configure(dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up'
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Définir l'alias pour le middleware d'authentification
        $middleware->alias([
            'auth' => \App\Http\Middleware\Authentification::class,
        ]);

        // Définir un alias pour le middleware de rôle
        $middleware->alias([
            'role' => \App\Http\Middleware\RoleMiddleware::class,
        ]);

        // Ajouter le middleware de rôle avec les rôles spécifiés
        $middleware->append(\App\Http\Middleware\RoleMiddleware::class);
        $middleware->append(\App\Http\Middleware\RoleMiddleware::class, 'personnel');
        $middleware->append(\App\Http\Middleware\RoleMiddleware::class, 'candidat');
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Gérer les exceptions ici si nécessaire
    })
    ->create();
