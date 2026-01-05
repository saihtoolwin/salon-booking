<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $services = [
            'Haircut',
            'Hair Coloring',
            'Beard Trim',
            'Shampoo & Conditioning',
            'Hair Styling',
            'Hair Treatment',
            'Perm',
            'Highlights',
            'Scalp Massage',
            'Facial'
        ];

         for ($i = 0; $i < count($services); $i++) { 
            DB::table('services')->insert([
                'name' => $services[$i],
                'is_active'=>rand(0,1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
