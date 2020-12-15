<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";

    protected $fillable = ['id_type', 'id_user', 'name', 'unit_price', 'promotion_price	', 'description', 'image', 'publisher'];

    public function product_type()
    {
        return $this->belongsTo(Product_type::class,'id_type', 'id');
    }

    public function bill_in()
    {
        return $this->belongsToMany(Bill_in::class, 'bill_in_detail', 'id_product', 'id_bill_in');
    }

    public function bills()
    {
        return $this->belongsToMany(Bill::class, 'bill_detail', 'id_product', 'id_bill');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'id_user', 'id');
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class, 'comment', 'id_product', 'id_user');
    }

    public function rating()
    {
        return $this->belongsToMany(User::class, 'rating','id_product', 'id_user');
    }

}
