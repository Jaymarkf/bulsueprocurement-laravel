<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmployeePosition;

class EmployeePositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'INSTRUCTOR I',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'PROFESSOR III',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'INSTRUCTOR II',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'INSTRUCTOR III',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'UNIVERSITY PROFESSOR',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'PROFESSOR I',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'PROFESSOR II',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'PROFESSOR IV',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'PROFESSOR V',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'PROFESSOR VI',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'ASSISTANT PROFESSOR I',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'ASSISTANT PROFESSOR II',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'ASSISTANT PROFESSOR III',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'ASSISTANT PROFESSOR IV',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'ASSISTANT PROFESSOR V',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'ASSOCIATE PROFESSOR I',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'ASSOCIATE PROFESSOR II',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'ASSOCIATE PROFESSOR III',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'ASSOCIATE PROFESSOR IV',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'ASSOCIATE PROFESSOR IV',]);
        EmployeePosition::create(['employee_type_id' => 1, 'description' => 'ASSOCIATE PROFESSOR VI',]);
    }
}
