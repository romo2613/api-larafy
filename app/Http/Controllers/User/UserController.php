<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    /**
     * Constructor
     * @param UserService $userService
     */

    public function __construct(protected UserService $userService) {}

    /**
     * retorna un listado json de usuarios
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $users = $this->userService->index();

        return response()->json($users);
    }

    /**
     * Guarda un usuario y lo retorna
     * @param UserRequest $request
     * @return JsonResponse
     */
    public function store(UserRequest $request): JsonResponse
    {
        $data = $request->validated();

        $user = $this->userService->store($data);

        return response()->json($user);
    }

    /**
     * retorna un usuario específico
     * @param User $user
     * @return JsonResponse
     */
    public function show(User $user): JsonResponse
    {
        return response()->json($user);
    }

    /**
     * Actualiza un usuario y lo retorna
     * @param User $user
     * @return JsonResponse
     */
    public function update(UserRequest $request, User $user): JsonResponse
    {
        $data = $request->validated();

        $user = $this->userService->update($data, $user);

        return response()->json($user);
    }

    /**
     * Elimina un usuario y lo retorna
     * @param User $user
     * @return JsonResponse
     */
    public function destroy(User $user): JsonResponse
    {
        $user = $this->userService->destroy($user);

        return response()->json($user);
    }
}
