<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class level extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasOne(User::class);
    }
=======
class Level extends Model
{
    use HasFactory;
    protected $fillable = ['level'];
>>>>>>> abc9ce9d680c71465f5a54c4efe760e1f5dc19c4
}
