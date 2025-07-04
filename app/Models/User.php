<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['fullname', 'email', 'username', 'password', 'remember_token'];
}
