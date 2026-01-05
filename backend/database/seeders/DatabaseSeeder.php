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
        if (app()->environment("local")) {
            $this->call([
                UserSeeder::class,
                RoleSeeder::class,
                UserRoleSeeder::class,
                BarberSeeder::class,
                ServiceSeeder::class,
                ServiceVariantSeeder::class,
                BarberVariantSeeder::class,
                BookingSeeder::class,
                ReviewSeeder::class,
            ]);
        }
    }
}
