<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    private string $email;
    private String $password;

    public function __construct(string $email, string $password)
    {
        $this->$email = $email;
        $this->$password = $password;

    }

    public function getEmail(): string
    {
        return $this->name;
    }

    public function setEmail(string $name): void
    {
        $this->name = $name;
    }

    public function setPassword(String $start): void
    {
        $this->start = $start;
    }

}

