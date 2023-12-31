<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    protected $table = "users";
    protected $fillable = [
        "username",
        "name",
        "created_at",
        "updated_at",
    ];
}
