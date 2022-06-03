<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
<<<<<<< HEAD

    public function product(){
        return $this->hasMany(Product::class);
    }
=======
    protected $fillable = ['category'];
>>>>>>> abc9ce9d680c71465f5a54c4efe760e1f5dc19c4
}
