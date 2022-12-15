<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfiles extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['first_name', 'middle_initial', 'last_name', 'position','employee_position_id'];
=======
    protected $fillable = ['first_name', 'middle_initial', 'last_name', 'position'];
>>>>>>> b646d17 (test)

    function users(){
        return $this->belongsTo(User::class);
    }

}
