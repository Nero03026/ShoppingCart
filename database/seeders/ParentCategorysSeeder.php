<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ParentCategory;

class ParentCategorysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = [
            'Dairy, Bread & Eggs',
            'Snacks & Munchies',
            'Fruits & Vegetables',
            'Cold Drinks & Juices',
            'Breakfast & Instant Food',
            'Bakery & Biscuits',
            'Chicken, Meat & Fish',
        ];
        foreach ($date as $item) {
            ParentCategory::Create([
                'category_name' => $item,
            ]);
        };
        //
    }
}
