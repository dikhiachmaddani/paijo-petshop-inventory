<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(100)->create();
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'role' => 'admin'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'manager',
            'email' => 'manager@example.com',
            'role' => 'manager'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'operator',
            'email' => 'operator@example.com',
            'role' => 'operator'
        ]);
    }
}