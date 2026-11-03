<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class LibrarySeeder extends Seeder
{
    public function run(): void
    {
        $user = User::create([
            'name' => 'Juan Dela Cruz',
            'email' => 'juan@example.com',
            'password' => bcrypt('password123'),
        ]);

        $user->profile()->create([
            'student_id' => 'LIB-001',
            'address' => 'Cebu City',
            'contact_number' => '09123456789',
        ]);
    }
}
