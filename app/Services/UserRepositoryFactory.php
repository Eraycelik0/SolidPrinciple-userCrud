<?php

namespace App\Services;

class UserRepositoryFactory {

    public static function create(): UserRepository
    {
        // İsteğe bağlı olarak başka bir UserRepository uygulaması döndürebilirsiniz
        return new DatabaseUserRepository();
    }
}
