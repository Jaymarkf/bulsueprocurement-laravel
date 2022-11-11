<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Branches;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Branches::create(['branch_name' => 'Hagonoy Campus',]);
        Branches::create(['branch_name' => 'Meneses Campus',]);
        Branches::create(['branch_name' => 'Bustos Campus',]);
        Branches::create(['branch_name' => 'Sarmiento Campus',]);
        Branches::create(['branch_name' => 'Main Office',]);
        Branches::create(['branch_name' => 'College of Architecture and Fine Arts',]);
        Branches::create(['branch_name' => 'College of Arts and Letters',]);
        Branches::create(['branch_name' => 'College of Business Administration',]);
        Branches::create(['branch_name' => 'College of Criminal Justice Education',]);
        Branches::create(['branch_name' => 'College of Education',]);
        Branches::create(['branch_name' => 'College of Engineering',]);
        Branches::create(['branch_name' => 'College of Home Economics',]);
        Branches::create(['branch_name' => 'College of Industrial Technology',]);
        Branches::create(['branch_name' => 'College of Information and Communications Technology',]);
        Branches::create(['branch_name' => 'College of Law',]);
        Branches::create(['branch_name' => 'College of Nursing',]);
        Branches::create(['branch_name' => 'College of Physical Education, Recreation and Sports',]);
        Branches::create(['branch_name' => 'College of Science',]);
        Branches::create(['branch_name' => 'College of Social Science and Philosophy',]);
        Branches::create(['branch_name' => 'Graduate School',]);
        Branches::create(['branch_name' => 'College of Hospitality and Tourism Management',]);
    }
}
