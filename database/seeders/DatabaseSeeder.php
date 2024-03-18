<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'attributes' => [
                'role' => 'admin',
                'active' => 'true',
            ],
        ]);

        User::factory()->create([
            'attributes' => [
                'role' => 'candidate',
                'active' => 'true',
            ],
        ]);

        User::factory()->create([
            'attributes' => [
                'role' => 'mod',
                'active' => 'false',
            ],
        ]);
    }
}
