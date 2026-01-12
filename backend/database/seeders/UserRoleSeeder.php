<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_roles')->insert([
            ['user_id' => 1, 'role_id' => 1],
        ]);

      
        DB::table('user_roles')->insert([
            ['user_id' => 2, 'role_id' => 2], 
        ]);

        for ($i = 3; $i <= 7; $i++) {
            DB::table('user_roles')->insert([
                'user_id' => $i,
                'role_id' => 2, 
            ]);
        }

        DB::table('user_roles')->insert([
            ['user_id' => 8, 'role_id' => 3], // customer
        ]);
    }
}
