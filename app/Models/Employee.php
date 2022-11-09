<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'middle_name', 'last_name', 'branch_id', 'employee_position_id'];

    public function branch()
    {
        return $this->belongsTo(Branches::class);
    }

    public function employee_position()
    {
        return $this->belongsTo(EmployeePosition::class);
    }
}
