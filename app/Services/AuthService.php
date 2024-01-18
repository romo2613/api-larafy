<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;

class AuthService
{

    public function __construct
    (
        protected User $user = new User
    ) {}

    /**
     * Registrar un usuario en la base de datos y devuelve el usuario junto con su token de sesión
     * @param array $attributes Parámetros del usuario
     * @return array
     */
    public function register(array $attributes): array
    {
        $user = $this->user->newInstance($attributes);

        $user->save();

        $token = $user->createToken('auth_token')->plainTextToken;

        return [
            'user'  => $user,
            'token' => $token
        ];
    }

    /**
     * Iniciar sesion con un usuario registrado en la app. Devuelve su token se sesión junto con el usuario
     * @param array $attributes Parámetros de inicio de sesión
     * @return array|AuthenticationException Si falla el login retornamos una excepción
     */
    public function login(array $attributes): array
    {
        if (!Auth::attempt($attributes)) {
            throw new AuthenticationException();
        }

        $user = User::where('email', $attributes['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return [
            'access_token'  => $token,
            'token_type'    => 'Bearer',
            'user'          => $user
        ];
    }
}
