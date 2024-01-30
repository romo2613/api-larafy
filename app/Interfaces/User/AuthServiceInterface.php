<?php

namespace App\Interfaces\User;

use Illuminate\Auth\AuthenticationException;

interface AuthServiceInterface
{
    public function register(array $attributes): array;
    public function login(array $attributes): array|AuthenticationException;
}
