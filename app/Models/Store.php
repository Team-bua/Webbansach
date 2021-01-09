<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $table = "store";

    public function productinbill()
    {
        return $this->belongsTo(BillDetail::class,'id_product', 'id_product');
    }

    public function products()
    {
        return $this->belongsTo(Product::class,'id_product', 'id');
    }
}
