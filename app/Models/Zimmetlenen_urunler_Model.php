<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zimmetlenen_urunler_Model extends Model
{
    protected $table = "zimmetlenen_urunler";
    protected $fillable = [
        "zimmetlenen_kisi_id",
        "urun_adi",
        "urun_modeli",
        "urun_sayisi",
        "created_at",
        "updated_at",
    ];

    public function kisiler(){
        return $this -> hasOne(KisilerModel::class, 'kisi_id', "zimmetlenen_kisi_id");
    }
}
