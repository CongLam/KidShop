<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "tbl_products";
    protected $primaryKey = "product_id";
    protected $guarded = []; //khong co truong du lieu nao duoc bao ve, co the tuong dac duoc voi tat ca
}
