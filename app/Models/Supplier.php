<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = "supplier";

    public function bills()
    {
        return $this->belongsTo(Bill_in::class,'id_supplier', 'id');
    }
}
