<?php

namespace Database\Seeders;

use App\Models\Barber;
use App\Models\BarberVariant;
use App\Models\ServiceVariant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarberVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $service_variants = ServiceVariant::all();
        $barbers= Barber::all();

        foreach ($barbers as $key => $barber) {
            $assignVariants = $service_variants->random(rand(3,5));

            foreach ($assignVariants as $variant) {
                BarberVariant::create([
                    'barber_id' => $barber->id,
                    'service_variant_id' => $variant->id,
                ]);
            }
        }
    }
}
