<?php

namespace App\Services;

use App\Models\User;
use App\Helpers\Helper;

class UserService
{
    protected $user;

    public function __construct()
    {
        $this->user = new User;
    }

    /**
     * Muestra el listado de usuarios
     */
    public function index()
    {
        $User = $this->user::paginate(25);

        return $User;
    }

    /**
     * Muestra un usuario concreto
     * @param User $User
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Guarda el usuario
     * @param Array $attributes
     */
    public function store(array $attributes)
    {
        $attributes['password'] = Helper::randomCode();

        $user = $this->user->newInstance($attributes);

        $user->save();

        return $user;
    }

    /**
     * Actualiza un Usero
     * @param User $request
     * @param Array $attributes
     */
    public function update(array $attributes, User $user)
    {
        $user->update($attributes);

        return $user;
    }

    /**
     * Elimina un Usero
     * @param User $user
     */
    public function destroy(User $user)
    {
        $user->delete();

        return $user;
    }

}
