<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ItemCategories;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ItemCategories::create(['description' => 'INK/TONER FOR PRINTERS']);
        ItemCategories::create(['description' => 'INK/TONER FOR PHOTOCOPYING MACHINE']);
        ItemCategories::create(['description' => 'COMMON OFFICE SUPPLIES']);
        ItemCategories::create(['description' => 'PAPER']);
        ItemCategories::create(['description' => 'COMMON OTHER SUPPLIES & MATERIALS']);
        ItemCategories::create(['description' => 'DIPLOMA HOLDER']);
        ItemCategories::create(['description' => 'STAMPING MACHINE']);
        ItemCategories::create(['description' => 'PLAQUES, TROPHIES & LEI']);
        ItemCategories::create(['description' => 'FLAGS & FLAGPOLE']);
        ItemCategories::create(['description' => 'FURNITURE & FIXTURES (LESS THAN P15,000)']);
        ItemCategories::create(['description' => 'FILING CABINET']);
        ItemCategories::create(['description' => 'MONOBLOCK CHAIRS']);
        ItemCategories::create(['description' => 'OFFICE EQUIPMENT (LESS THAN P15,000)']);
        ItemCategories::create(['description' => 'PRINTER']);
        ItemCategories::create(['description' => 'APPLIANCES  (LESS THAN P15,000)']);
        ItemCategories::create(['description' => 'MACHINERY & EQUIPMENT (LESS THAN P15,000)']);
        ItemCategories::create(['description' => 'ICT EQUIPMENT & PERIPHERALS  (LESS THAN P15,000)']);
        ItemCategories::create(['description' => 'JANITORIAL SUPPLIES']);
        ItemCategories::create(['description' => 'OFFICE EQUIPMENT (P15,000 and UP)']);
        ItemCategories::create(['description' => 'ICT EQUIPMENT (P15,000 and UP)']);
        ItemCategories::create(['description' => 'MEDICAL EQUIPMENT (P15,000 and UP)']);
        ItemCategories::create(['description' => 'SPORTS EQUIPMENT (P15,000 and UP)']);
        ItemCategories::create(['description' => 'MUSICAL INSTRUMENTS/SOUND SYSTEM (P15,000 and UP)']);
        ItemCategories::create(['description' => 'TECHNICAL & SCIENTIFIC EQUIPMENT (P15,000 and UP)']);
        ItemCategories::create(['description' => 'OTHER MACHINERY & EQUIPMENT (P15,000 and UP)']);
        ItemCategories::create(['description' => 'LABORATORY EQUIPMENT (P15,000 and UP)']);
        ItemCategories::create(['description' => 'PHYSICS LABORATORY EQUIPMENT (P15,000 and UP)']);
        ItemCategories::create(['description' => 'CRIMINOLOGY LABORATORY EQUIPMENT (P15,000 and UP)']);
        ItemCategories::create(['description' => 'AUTOMOTIVE DEPARTMENT (P15,000 and UP)']);
        ItemCategories::create(['description' => 'BIOLOGY (P15,000 and UP)']);
        ItemCategories::create(['description' => 'FOOD SCIENCE (P15,000 and UP)']);
        ItemCategories::create(['description' => 'ENVIRONMENTAL SCIENCE (P15,000 and UP)']);
        ItemCategories::create(['description' => 'CHEMISTRY (P15,000 and UP)']);
        ItemCategories::create(['description' => 'BAKING (P15,000 and UP)']);
        ItemCategories::create(['description' => 'FURNITURES AND FIXTURES (P15,000 and UP)']);
        ItemCategories::create(['description' => 'TEXTBOOKS & INSTRUCTIONAL MATERIALS']);
        ItemCategories::create(['description' => 'SUBSCRIPTION EXPENSES']);
        ItemCategories::create(['description' => 'OTHER MOOE (EVENTS & ACTIVITIES)']);
        ItemCategories::create(['description' => 'REPRESENTATION EXPENSES']);
        ItemCategories::create(['description' => 'CONSTRUCTION (PMO)']);
        ItemCategories::create(['description' => 'REPAIR & MAINTENANCE (FMO)']);
        ItemCategories::create(['description' => 'ProjectorsNew']);
        ItemCategories::create(['description' => 'FIRE EXTINGUISHER']);
        ItemCategories::create(['description' => 'monoblock']);
        ItemCategories::create(['description' => 'DUGONG']);
        ItemCategories::create(['description' => 'Pusa']);
        ItemCategories::create(['description' => 'IPAD']);
        ItemCategories::create(['description' => 'NEW ITEM']);
    }
}
