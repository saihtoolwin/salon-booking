<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Review;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookings = Booking::all();
        $faker = Factory::create();
        foreach ($bookings as $booking) {
            if (rand(0, 1)) {
                Review::create([
                    'booking_id' => $booking->id,
                    'barber_id' => $booking->barber_id,
                    'user_id' => $booking->user_id,
                    'rating' => rand(3, 5),
                    'comment' => $faker->sentence(rand(5, 15)),
                ]);
            }
        }
    }
}
