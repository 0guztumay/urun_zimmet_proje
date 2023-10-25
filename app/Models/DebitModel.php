<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DebitModel extends Model
{
    protected $table = "debit";
    protected $fillable = [
        "user_id",
        "product_id",
        "quantity",
        "created_at",
        "updated_at",
    ];

    public function getProduct(){
        return $this->hasMany(ProductsModel::class, 'id', 'product_id');
    }

    public function getUser(){
        return $this->hasOne(UsersModel::class, 'id', 'user_id');
    }
}