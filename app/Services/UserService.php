<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function store(array $data): User
    {
        return User::create($data);
    }

    public function update(int $id, array $data): User
    {
        $user = User::findOrFail($id);

        $user->update($data);

        return $user;
    }

    public function delete(int $id): User
    {
        $user = User::findOrFail($id);

        $user->delete();

        return $user;
    }
}
