<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Attraction;
use App\Models\Destination;

class AttractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 10; $i++) {
            Attraction::create([
                'destination_id' => Destination::inRandomOrder()->first()->id,
                'name' => fake("id_ID")->name(),
                'description' => fake("id_ID")->sentence(),
                ]);
            }
     }
}
