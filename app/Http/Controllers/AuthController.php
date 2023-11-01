<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RegisterUserAuthRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = new AuthService;
    }

    public function register(RegisterUserAuthRequest $request)
    {
        $data = $request->validated();

        $registerUser = $this->authService->register($data);

        return $registerUser;
    }

}
