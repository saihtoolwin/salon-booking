<?php

namespace Database\Seeders;

use App\Models\Barber;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class BarberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Log::info("it is here");
        $barber = User::where('email', 'barber@gmail.com')
            ->whereHas('roles', function ($query) {
                $query->where('roles.id', 2);
            })
            ->first();

        if (!$barber) {
            $this->command->warn('Barber user not found or role not attached.');
            return;
        }
        
        Barber::firstOrCreate(
            ['user_id' => $barber->id],
            [
                'rating' => 5,
                'bio' => 'Professional barber with years of experience',
            ]
        );
    }
}
