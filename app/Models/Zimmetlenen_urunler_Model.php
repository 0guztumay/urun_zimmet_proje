<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zimmetlenen_urunler_Model extends Model
{
    protected $table = "zimmetlenen_urunler";
    protected $fillable = [
        "urun_adi",
        "urun_modeli",
        "urun_tipi",
        "urun_sayisi",
        "zimmetlenen_kisi",
        "zimmetleyen_kisi",
        "zimmetleme_tarihi",
        "created_at",
        "updated_at",
    ];
}
