<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandsModel extends Model
{
    protected $table = "brands";
    protected $fillable = [
        "name",
        "created_at",
        "updated_at",
    ];
}