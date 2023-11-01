<?php

namespace App\Services;

use App\Models\User;

class AuthService
{
    protected   $user;

    public function __construct()
    {
        $this->user         = new User;
    }

    /**
     * Registrar un usuario
     */
    public function register(array $attributes)
    {
        $user = $this->user->newInstance($attributes);

        $user->save();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'user'  => $user,
            'token' => $token
        ]);
    }

    /**
     * Iniciar sesion con un usuario registrado en la app
     */
    public function login(array $attributes, User $user)
    {

    }
}
