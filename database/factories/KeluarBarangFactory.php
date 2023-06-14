<?php

namespace Database\Factories;

use App\Models\MasterDataBarang;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KeluarBarang>
 */
class KeluarBarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'reference' => fake()->numerify('###########'),
            'user_id' => User::all()->random()->id,
            'master_data_barang_id' => MasterDataBarang::all()->random()->id,
            'price' => fake()->numerify('###########'),
            'stock' => fake()->numerify('##'),
            'remarks' => fake()->sentence(3),
        ];
    }
}
