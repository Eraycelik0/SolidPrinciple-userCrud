<?php

namespace App\Repositories;
use App\Models\User;

interface UserRepository
{
    public function createUser(array $userData);
    public function getUserById(int $userId);
    public function updateUser(int $userId, array $userData);
    public function deleteUser(int $userId);
    public function getAll();

}
