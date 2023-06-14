<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Uom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MasterDataBarang>
 */
class MasterDataBarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' => 'assets/images/products/s1.jpg',
            'serial_number' => fake()->numerify('##########'),
            'item_name' => fake()->sentence(5),
            'brand_id' => Brand::all()->random()->id,
            'uom_id' => Uom::all()->random()->id,
            'category_id' => Category::all()->random()->id,
            'price' => fake()->numerify('##########'),
            'stock' => fake()->numerify('##'),
        ];
    }
}
