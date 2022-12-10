<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            EmployeeTypeSeeder::class,
        ]);
        $this->call([
            EmployeePositionSeeder::class,
            BranchSeeder::class,
            UserProfileSeeder::class,
            UserSeeder::class,
            EmployeeSeeder::class,
            CompanySeeder::class,
            EquipmentCodeSeeder::class,
            UnitSeeder::class,
            ItemPurposeSeeder::class,
            ItemCategorySeeder::class,
            ItemDetailSeeder::class,
        ]);
    }
}
