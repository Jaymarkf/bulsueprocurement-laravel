<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branches extends Model
{
    use HasFactory;
    protected $fillable = ['branch_name', 'level'];

    function user(){
        return $this->hasMany(User::class);
    }
}
