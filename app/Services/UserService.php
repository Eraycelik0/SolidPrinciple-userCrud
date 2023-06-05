<?php

namespace App\Services;

use App\Repositories\DatabaseUserRepository;
use App\Repositories\UserRepository;

class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository, DatabaseUserRepository $databaseUserRepository)
    {
        $this->userRepository = $userRepository;
        $this->databaseUserRepository = $databaseUserRepository;
    }

    public function createUser(array $userData) {
        // UserRepository kullanarak kullanıcı oluştur
        $this->userRepository->createUser($userData);
    }

    public function getAllUsers() {
        return $this->databaseUserRepository->getAll();
    }

    public function getUserById(int $userId) {
        // UserRepository kullanarak kullanıcıyı al
        return $this->userRepository->getUserById($userId);
    }

    public function updateUser(int $userId, array $userData) {
        // UserRepository kullanarak kullanıcıyı güncelle
        $this->userRepository->updateUser($userId, $userData);
    }

    public function deleteUser(int $userId) {
        // UserRepository kullanarak kullanıcıyı sil
        $this->userRepository->deleteUser($userId);
    }
}
