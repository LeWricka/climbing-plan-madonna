<?php

namespace Core\Users\Domain;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    private string $email;
    private string $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = email;
    }

    public function setPassword(string $password): void
    {
        $this->password = password;
    }
}
