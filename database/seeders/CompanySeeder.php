<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Companies;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Companies::create([
            'name' => str::random(10),
            'address' => str::random(5) . ', ' . str::random(5) . ', ' . str::random(5),
            'tin' => rand(100, 999) . '-' . rand(100, 999) . '-' . rand(100, 999),
            'email_address' => str::random(7) . '@gmail.com',
            'contact' => '09' . rand(100000000, 999999999),
            'added_by' => 1,
        ]);
    }
}
