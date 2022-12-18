<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfiles extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'middle_initial', 'last_name', 'position', 'employee_position_id'];

    function users()
    {
        return $this->belongsTo(User::class);
    }
}
