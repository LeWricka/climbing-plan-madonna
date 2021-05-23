<?php

namespace Core\Users\Domain;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaravelUser extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'email'];
}
