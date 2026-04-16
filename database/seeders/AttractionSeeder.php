<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       for($i = 0; $i <= 10; $i++) {
            \App\Models\Attraction::create([
                'name' => fake("id_ID")->name(),
                'description' => fake("id_ID")->sentence(),
            ]);
        }
    }
}
