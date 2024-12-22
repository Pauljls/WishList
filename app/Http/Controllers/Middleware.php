<?php
 
namespace App\Http;
 
use Illuminate\Http\Middleware\HandleCors;
 
class Middleware
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    public static array $middleware = [
        HandleCors::class,
        // ... otros middleware
    ];
 
    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    public static array $middlewareGroups = [
        'web' => [
            // ... middleware del grupo web
        ],
 
        'api' => [
            // ... middleware del grupo api
        ],
    ];
}