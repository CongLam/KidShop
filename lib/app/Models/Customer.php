<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "tbl_customers";
    protected $primaryKey = "cus_id";
    protected $guarded = []; //khong co truong du lieu nao duoc bao ve, co the tuong dac duoc voi tat ca
}
