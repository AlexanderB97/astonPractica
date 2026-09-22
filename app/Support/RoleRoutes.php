<?php

namespace App\Support;

use App\Models\User;

class RoleRoutes
{
    /**
     * Ruta destino según el rol del usuario.
     */
    public static function forUser(User $user): string
    {
        return match ($user->role) {
            User::ROLE_ADMIN => '/admin',
            User::ROLE_DOCENTE => '/docente',
            User::ROLE_ESTUDIANTE => '/estudiante',
            default => '/dashboard',
        };
    }
}