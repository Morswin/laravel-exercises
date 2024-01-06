<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 200; $i++) {
            DB::table('people')->insert([
                'name' => fake()->firstName(),
                'surename' => fake()->lastName(),
                'phoneNumber' => fake()->phoneNumber(),
                'street' => fake()->streetName(),
                'city' => fake()->city(),
                'country' => fake()->country()
            ]);
        }
    }
}
