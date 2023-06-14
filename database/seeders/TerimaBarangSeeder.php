<?php

namespace Database\Seeders;

use App\Models\TerimaBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TerimaBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        TerimaBarang::factory()->count(3)->create();
    }
}
