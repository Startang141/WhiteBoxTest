<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $fillable = ['level'];

    public function user(){
        return $this->hasMany(User::class);
    }

}