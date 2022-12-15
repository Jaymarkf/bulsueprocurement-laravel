<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'username' => "dev",
            'email_address' => 'dev@gmail.com',
            'password' => bcrypt('devpw123#'),
            'branch_id' => 1,
            'profiles_id' => 1,
            'approved' => 1,
            'remarks' => 'Test',
            'level' => 'admin',
<<<<<<< HEAD
            'added_by' => '1'
=======
>>>>>>> b646d17 (test)
        ]);
    }
}
