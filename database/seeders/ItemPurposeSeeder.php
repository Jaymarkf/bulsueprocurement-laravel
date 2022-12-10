<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ItemPurpose;
use Illuminate\Support\Str;

class ItemPurposeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 10; $i++) {
            ItemPurpose::create([
                'purpose' => str::random(10),
                'added_by' => 1
            ]);
        }
    }
}
