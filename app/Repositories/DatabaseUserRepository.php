<?php

namespace App\Repositories;

use App\Models\User;

class DatabaseUserRepository implements UserRepository {

    public function createUser(array $userData)
    {
        // TODO: Implement createUser() method.
        // Veritabanında kullanıcı oluşturma işlemini gerçekleştir
    }

    public function getUserById(int $userId)
    {
        // TODO: Implement getUserById() method.
        // Belirli bir kullanıcıyı veritabanından al
    }

    public function updateUser(int $userId, array $userData)
    {
        // TODO: Implement updateUser() method.
        // Kullanıcı bilgilerini güncelle
    }


    public function deleteUser(int $userId)
    {
        // TODO: Implement deleteUser() method.
        // Kullanıcıyı veritabanından sil
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return User::all();
    }
}
