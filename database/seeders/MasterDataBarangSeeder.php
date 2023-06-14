<?php

namespace Database\Seeders;

use App\Models\MasterDataBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterDataBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        MasterDataBarang::factory()->count(3)->create();
    }
}
