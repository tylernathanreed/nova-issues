<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password

        User::factory()->create([
            'name' => 'Tyler Reed',
            'email' => 'tylernathanreed@gmail.com',
            'password' => $password,
        ]);

        User::factory()->create([
            'name' => 'crynobone',
            'email' => 'crynobone@gmail.com',
            'password' => $password,
        ]);

        User::factory()->create([
            'name' => 'Laravel Nova',
            'email' => 'nova@laravel.com',
            'password' => $password,
        ]);
    }
}
