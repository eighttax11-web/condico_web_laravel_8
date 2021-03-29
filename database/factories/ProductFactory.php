<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Brand;
use App\Models\Category;


class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(20);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(250),
            'status' => $this->faker->randomElement([1,2]),
            'stock' => $this->faker->numberBetween($min = 10, $max = 1500),
            'original_price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 50, $max = 3000),
            'brand_id' => Brand::all()->random()->id,
            'category_id' => Brand::all()->random()->id
        ];
    }
}
