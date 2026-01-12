<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceVariant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = Service::all();


        foreach ($services as $service) {


            $variants = match ($service->name) {
                'Haircut' => [
                    ['name' => 'Fade', 'duration_minutes' => 30, 'price' => 12000],
                    ['name' => 'Buzz Cut', 'duration_minutes' => 25, 'price' => 10000],
                    ['name' => 'Scissor Cut', 'duration_minutes' => 40, 'price' => 15000],
                    ['name' => 'Hair Trim', 'duration_minutes' => 20, 'price' => 8000],
                ],
                'Hair Coloring' => [
                    ['name' => 'Ash Grey', 'duration_minutes' => 60, 'price' => 35000],
                    ['name' => 'Highlights', 'duration_minutes' => 90, 'price' => 45000],
                    ['name' => 'Full Color', 'duration_minutes' => 120, 'price' => 60000],
                ],
                'Beard Trim' => [
                    ['name' => 'Beard Shape', 'duration_minutes' => 20, 'price' => 7000],
                    ['name' => 'Full Beard Trim', 'duration_minutes' => 30, 'price' => 12000],
                ],
                'Shampoo & Conditioning' => [
                    ['name' => 'Quick Wash', 'duration_minutes' => 15, 'price' => 5000],
                    ['name' => 'Deep Conditioning', 'duration_minutes' => 40, 'price' => 15000],
                ],
                'Hair Styling' => [
                    ['name' => 'Casual Style', 'duration_minutes' => 20, 'price' => 8000],
                    ['name' => 'Special Occasion', 'duration_minutes' => 60, 'price' => 20000],
                ],
                'Hair Treatment' => [
                    ['name' => 'Keratin', 'duration_minutes' => 90, 'price' => 40000],
                    ['name' => 'Protein', 'duration_minutes' => 60, 'price' => 25000],
                ],
                'Perm' => [
                    ['name' => 'Short Hair Perm', 'duration_minutes' => 60, 'price' => 35000],
                    ['name' => 'Long Hair Perm', 'duration_minutes' => 90, 'price' => 50000],
                ],
                'Highlights' => [
                    ['name' => 'Partial Highlights', 'duration_minutes' => 60, 'price' => 30000],
                    ['name' => 'Full Highlights', 'duration_minutes' => 90, 'price' => 45000],
                ],
                'Scalp Massage' => [
                    ['name' => '10 min Massage', 'duration_minutes' => 10, 'price' => 5000],
                    ['name' => '30 min Massage', 'duration_minutes' => 30, 'price' => 15000],
                ],
                'Facial' => [
                    ['name' => 'Quick Facial', 'duration_minutes' => 20, 'price' => 10000],
                    ['name' => 'Full Facial', 'duration_minutes' => 50, 'price' => 25000],
                ],
                default => [
                    ['name' => 'Standard', 'duration_minutes' => 30, 'price' => 15000],
                ],
            };

            foreach ($variants as $variant) {
                ServiceVariant::create([
                    'service_id' => $service->id,
                    'name' => $variant['name'],
                    'duration_minutes' => $variant['duration_minutes'],
                    'price' => $variant['price'],
                ]);
            };
        }
    }
}
