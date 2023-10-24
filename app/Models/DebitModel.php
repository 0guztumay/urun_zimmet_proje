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

    public function product(){
        return $this->hasMany(ProductsModel::class, 'id', 'product_id');
    }

    public function user(){
        return $this->hasMany(UsersModel::class, 'user_id', 'id');
    }
}