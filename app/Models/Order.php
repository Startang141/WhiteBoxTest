<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
<<<<<<< HEAD

    public function user(){
        return $this->belongsTo(user::class);
    }
=======
    protected $fillable = ['id', 'user_id', 'order_date', 'total', 'status'];
>>>>>>> abc9ce9d680c71465f5a54c4efe760e1f5dc19c4
}
