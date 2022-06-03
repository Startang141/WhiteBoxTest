<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'category_id', 'description', 'price', 'stock', 'rating', 'image'];

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function cart(){
        return $this->belongsToMany(category::class);
    }
}
