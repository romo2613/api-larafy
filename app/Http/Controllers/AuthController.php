<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginUserAuthRequest;
use App\Http\Requests\Auth\RegisterUserAuthRequest;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Auth\AuthenticationException;


class AuthController extends Controller
{
    /**
     * constructor
     * @param AuthService $authService
     */
    public function __construct(protected AuthService $authService) {}

    /**
     * Procesa la peticion http de login.
     * @param LoginUserAuthRequest $request
     * @return JsonResponse
     */
    public function login(LoginUserAuthRequest $request): JsonResponse
    {
        try
        {
            $data = $request->validated();

            $userLogin = $this->authService->login($data);

            return response()->json($userLogin);

        }
        catch (AuthenticationException $e)
        {
            return response()->json($e->getMessage(), 401);
        }

    }

    /**
     * Procesa la peticion http de registro.
     * @param RegisterUserAuthRequest $request
     * @return JsonResponse
     */
    public function register(RegisterUserAuthRequest $request): JsonResponse
    {
        $data = $request->validated();

        $registerUser = $this->authService->register($data);

        return response()->json($registerUser);
    }

}
