<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Uom;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(100)->create();
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'role' => 'admin'
        ]);
        User::factory()->create([
            'name' => 'manager',
            'email' => 'manager@example.com',
            'role' => 'manager'
        ]);
        User::factory()->create([
            'name' => 'operator',
            'email' => 'operator@example.com',
            'role' => 'operator'
        ]);
        Category::create([
            'name_category' => "pcs"
        ]);
        Brand::create([
            'name_brand' => "Wiskas"
        ]);
        Uom::create([
            'unit' => "Box",
            'desc' => "Box"
        ]);
    }
}
