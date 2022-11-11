<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\EquipmentCodes;

class EquipmentCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 15; $i++) {
            EquipmentCodes::create([
                'code' => Str::random(5),
                'description' => Str::random(15),
            ]);
        }
    }
}
