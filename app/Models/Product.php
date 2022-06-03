<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
<<<<<<< HEAD
    public static function index(){
        return Product::all();
    }

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function cart(){
        return $this->belongsToMany(category::class);
    }

    public function order_detail(){
        return $this->belongsToMany(order_detail::class);
    }
=======
    use HasFactory;
    protected $fillable = ['name', 'category_id', 'description', 'price', 'stock', 'rating', 'image'];
>>>>>>> abc9ce9d680c71465f5a54c4efe760e1f5dc19c4
}
