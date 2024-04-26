<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    // Establecer autorizaciones en cada vista
    public function boot(): void
    {
        // Operaciones en vista Inventario
        Gate::define('tablaInventario', function (User $user) {
            return $user->puesto == 'Admin';
        });

        // Operaciones en vista Reabastecimientos
        Gate::define('tablaReabastecimientos', function (User $user) {
            return $user->puesto == 'Admin';
        });

        // Operaciones en vista Usuarios
        Gate::define('tablaUsuarios', function (User $user) {
            return $user->puesto == 'Admin';
        });

    }
}
