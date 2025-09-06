<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    public function run(): void
    {
        $stores = [
            ['name' => 'مخزن هاني', 'description' => 'مخزن رئيسي للمنتجات'],
            ['name' => 'مخزن طارق', 'description' => 'مخزن فرعي للمنتجات'],
            ['name' => 'مخزن تحضير', 'description' => 'مخزن لتحضير المنتجات'],
            ['name' => 'مخزن خلفي', 'description' => 'مخزن خلفي للمنتجات'],
            ['name' => 'مخزن خامات1', 'description' => 'مخزن الخامات الأول'],
            ['name' => 'مخزن خامات2', 'description' => 'مخزن الخامات الثاني'],
        ];

        foreach ($stores as $store) {
            Store::create($store);
        }
    }
}
