<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    use HasFactory;

    public function order(){
        return $this->belongsTo(order::class);
    }
    public function product(){
        return $this->belongsToMany(product::class);
    }
}
