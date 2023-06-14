<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        User::factory()->count(100)->create();
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
    }
}
