<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    protected $table = "products";
    protected $fillable = [
        "name",
        "model_id",
        "created_at",
        "updated_at",
    ];

    public function getModel(){
        return $this->hasMany(ModelsModel::class, "id", "model_id");
    }
}
