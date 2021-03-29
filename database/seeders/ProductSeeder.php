<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::factory(50)->create();

        foreach ($products as $product) {
            $product->tags()->attach([
                rand(1, 5),
                rand(6, 10)
            ]);
        }
    }
}
