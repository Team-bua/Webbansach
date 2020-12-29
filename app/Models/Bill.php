<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = "bills";

    public function products()
    {
        return $this->belongsToMany(Product::class, 'bill_detail')->withPivot('name')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class,'id_user', 'id');
    }
}
