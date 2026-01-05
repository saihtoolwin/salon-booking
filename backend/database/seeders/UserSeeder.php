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
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'barber',
            'email' => 'barber@gmail.com',
            'password' => Hash::make('password'),
        ]);

         for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => "Barber $i",
                'email' => "barber$i@gmail.com",
                'password' => Hash::make('password'),
            ]);
        }

        User::create([
            'name' => 'customer',
            'email' => 'customer@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::factory(10)->create()->count();
    }
}
