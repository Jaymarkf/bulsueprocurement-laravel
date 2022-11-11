<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmployeeType;

class EmployeeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        EmployeeType::create([
            'description' => 'Supplier Employee',
        ]);

        EmployeeType::create([
            'description' => 'Supply Office Employee',
        ]);
    }
}
