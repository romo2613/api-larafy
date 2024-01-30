<?php

namespace App\Services;

use App\Interfaces\User\UserServiceInterface;
use App\Helpers\Helper;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
class UserService implements UserServiceInterface
{
    /**
     * Constructor
     * @param User $user
     */
    public function __construct(
        protected User $user,
    ) {}

    /**
     * Muestra el listado de usuarios paginados
     * @return LengthAwarePaginator
     */
    public function index(): LengthAwarePaginator
    {
        $User = $this->user::paginate(25);

        return $User;
    }

    /**
     * Muestra un usuario concreto
     * @param User $User
     * @return User
     */
    public function show(User $user): User
    {
        return $user;
    }

    /**
     * Guarda el usuario
     * @param Array $attributes
     * @return User
     */

     //TODO: implementar el envio de contraseña por correo al crear un nuevo usuario

    public function store(array $attributes): User
    {
        $attributes['password'] = Helper::randomCode();

        $user = $this->user->newInstance($attributes);

        $user->save();

        return $user;
    }

    /**
     * Actualiza un usuario
     * @param User $request
     * @param Array $attributes
     */
    public function update(array $attributes, User $user): User
    {
        $user->update($attributes);

        return $user;
    }

    /**
     * Elimina un usuario
     * @param User $user
     */
    public function destroy(User $user): User
    {
        $user->delete();

        return $user;
    }

}
