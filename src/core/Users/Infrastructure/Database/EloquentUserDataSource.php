<?php

namespace Core\Users\Infrastructure\Database;

use Core\Users\Domain\LaravelUser;
use Exception;

class EloquentUserDataSource
{
    public function findByEmail($email): LaravelUser
    {
        $user = LaravelUser::query()->where('email', $email)->first();
        if (is_null($user)) {
            throw new Exception('User not found');
        }
        return $user;
    }
}
