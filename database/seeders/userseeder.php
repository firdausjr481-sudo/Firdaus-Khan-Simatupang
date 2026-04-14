<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for($i = 0; $i <= 50; $i++) {
            user::create([
            'name' => fake("id_ID")->name(),
            'email' => fake("id_ID")->unique()->safeEmail(),
            'password' => bcrypt("password"),  
        ]);
        }

    }
}
