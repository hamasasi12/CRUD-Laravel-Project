<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(25)->create();

        User::create([
            'name' => 'hamas',
            'email' => 'hamas@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('testpassword'),
            'roles' => 'mahasiswa',
        ]);
    }
}
