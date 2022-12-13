<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ItemDetails;

class ItemDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ItemDetails::create([
            'category_id' => 4,
            'description' => 'Canon 810 Black',
            'article' => 'Test',
            'unit_id' => 16,
            'price_catalogue' => 1000.23,
            'added_by' => 1,
            'is_approved' => false,
            'approved_by' => 0,
        ]);
    }
}
