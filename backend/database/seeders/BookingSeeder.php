<?php

namespace Database\Seeders;

use App\Enum\BookingStatus;
use App\Models\Barber;
use App\Models\Booking;
use App\Models\ServiceVariant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = User::where('id', '>', 10)->get();
        $barbers = Barber::all();
        $variants = ServiceVariant::all();

        foreach ($customers as $customer) {
            $barber = $barbers->random();
            $variant = $variants->random();
            $status = BookingStatus::cases()[array_rand(BookingStatus::cases())];

            Booking::create([
                'user_id' => $customer->id,
                'barber_id' => $barber->id,
                'service_id' => $variant->service_id,
                'service_variant_id' => $variant->id,
                'date' => now()->addDays(rand(0, 10)),
                'start_time' => now()->format('H:i'),
                'duration_minutes' => $variant->duration_minutes,
                'price' => $variant->price,
                'status' => $status,
            ]);
        }
    }
}
