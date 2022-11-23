<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserProfiles;
use Illuminate\Support\Str;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        UserProfiles::create([
            'first_name' => Str::random(5),
            'middle_initial' => Str::random(1),
            'last_name' => Str::random(5),
            'employee_position_id' => 1,
        ]);
    }
}
