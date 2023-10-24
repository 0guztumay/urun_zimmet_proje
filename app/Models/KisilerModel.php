<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KisilerModel extends Model
{
    protected $table = "kisiler";
    protected $primaryKey = "kisi_id";
    protected $fillable = [
        "ad",
        "soyad",
        "created_at",
        "updated_at",
    ];
}
