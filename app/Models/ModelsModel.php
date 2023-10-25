<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelsModel extends Model
{
    protected $table = "models";
    protected $fillable = [
        "name",
        "brand_id",
        "created_at",
        "updated_at",
    ];

    public function getBrand(){
        return $this->hasMany(BrandsModel::class, 'id','brand_id');
    }
}