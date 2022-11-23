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
        Branches::create(['branch_name' => 'N/A', 'added_by' => 1]);
        Branches::create(['branch_name' => 'Hagonoy Campus', 'added_by' => 1]);
        Branches::create(['branch_name' => 'Meneses Campus', 'added_by' => 1]);
        Branches::create(['branch_name' => 'Bustos Campus', 'added_by' => 1]);
        Branches::create(['branch_name' => 'Sarmiento Campus', 'added_by' => 1]);
        Branches::create(['branch_name' => 'Main Office', 'added_by' => 1]);
        Branches::create(['branch_name' => 'College of Architecture and Fine Arts', 'added_by' => 1]);
        Branches::create(['branch_name' => 'College of Arts and Letters', 'added_by' => 1]);
        Branches::create(['branch_name' => 'College of Business Administration', 'added_by' => 1]);
        Branches::create(['branch_name' => 'College of Criminal Justice Education', 'added_by' => 1]);
        Branches::create(['branch_name' => 'College of Education', 'added_by' => 1]);
        Branches::create(['branch_name' => 'College of Engineering', 'added_by' => 1]);
        Branches::create(['branch_name' => 'College of Home Economics', 'added_by' => 1]);
        Branches::create(['branch_name' => 'College of Industrial Technology', 'added_by' => 1]);
        Branches::create(['branch_name' => 'College of Information and Communications Technology', 'added_by' => 1]);
        Branches::create(['branch_name' => 'College of Law', 'added_by' => 1]);
        Branches::create(['branch_name' => 'College of Nursing', 'added_by' => 1]);
        Branches::create(['branch_name' => 'College of Physical Education, Recreation and Sports', 'added_by' => 1]);
        Branches::create(['branch_name' => 'College of Science', 'added_by' => 1]);
        Branches::create(['branch_name' => 'College of Social Science and Philosophy', 'added_by' => 1]);
        Branches::create(['branch_name' => 'Graduate School', 'added_by' => 1]);
        Branches::create(['branch_name' => 'College of Hospitality and Tourism Management', 'added_by' => 1]);
    }
}
