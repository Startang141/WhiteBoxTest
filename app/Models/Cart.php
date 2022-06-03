<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
<<<<<<< HEAD

    public function user(){
        return $this->belongsTo(user::class);
    }
    public function product(){
        return $this->belongsToMany(product::class);
    }
=======
    protected $fillable = ['user_id', 'product_id', 'price', 'qty', 'subtotal'];
>>>>>>> abc9ce9d680c71465f5a54c4efe760e1f5dc19c4
}
