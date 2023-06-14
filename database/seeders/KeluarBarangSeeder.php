<?php

namespace Database\Seeders;

use App\Models\KeluarBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeluarBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        KeluarBarang::factory()->count(3)->create();
    }
}
