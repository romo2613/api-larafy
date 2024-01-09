<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginUserAuthRequest;
use App\Http\Requests\Auth\RegisterUserAuthRequest;
use App\Services\AuthService;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = new AuthService;
    }

    public function login(LoginUserAuthRequest $request)
    {
        $data = $request->validated();

        $userLogin = $this->authService->login($data);

        return $userLogin;
    }

    public function register(RegisterUserAuthRequest $request)
    {
        $data = $request->validated();

        $registerUser = $this->authService->register($data);

        return $registerUser;
    }

}
