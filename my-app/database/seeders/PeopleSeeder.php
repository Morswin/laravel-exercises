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
        DB::table('people')->insert([
            'name' => 'John',
            'surename' => 'Smith',
            'phoneNumber' => '123123123',
            'street' => 'Groove',
            'city' => 'Dull',
            'country' => 'San-Escobar'
        ]);
    }
}
