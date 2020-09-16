<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "tbl_bills";
    protected $primaryKey = "bill_id";
    protected $guarded = [];
}
