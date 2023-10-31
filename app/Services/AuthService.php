<?php

namespace App\Services;

class AuthService
{
    protected $user;

    public function __construct()
    {
        $this->user = User::class;
    }

    /**
     * Registrar un usuario
     */
    public function register(array $attributes)
    {

    }
}
