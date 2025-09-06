<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => 'زعتر', 'category' => 'أعشاب', 'unit' => 'كيلو'],
            ['name' => 'كمون', 'category' => 'توابل', 'unit' => 'كيلو'],
            ['name' => 'كركم', 'category' => 'توابل', 'unit' => 'كيلو'],
            ['name' => 'فلفل أسود', 'category' => 'توابل', 'unit' => 'كيلو'],
            ['name' => 'قرفة', 'category' => 'توابل', 'unit' => 'كيلو'],
            ['name' => 'هيل', 'category' => 'توابل', 'unit' => 'كيلو'],
            ['name' => 'زنجبيل', 'category' => 'جذور', 'unit' => 'كيلو'],
            ['name' => 'شمر', 'category' => 'أعشاب', 'unit' => 'كيلو'],
            ['name' => 'يانسون', 'category' => 'أعشاب', 'unit' => 'كيلو'],
            ['name' => 'حبة البركة', 'category' => 'بذور', 'unit' => 'كيلو'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
