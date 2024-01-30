<?php

namespace App\Interfaces\User;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

interface UserServiceInterface
{
    public function index(): LengthAwarePaginator;
    public function show(User $user): User;
    public function store(array $attributes): User;
    public function update(array $attributes, User $user): User;
    public function destroy(User $user): User;
}
