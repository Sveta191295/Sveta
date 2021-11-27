<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flights')->insert([
            ['name' => Str::random(10), 'number' => Str::random(2) . '-
            ' . rand(100, 999), 'price' => rand(20,400)],
            ['name' => Str::random(10), 'number' => Str::random(2) . '-
            ' . rand(100, 999), 'price' => rand(20,400)],
            ['name' => Str::random(10), 'number' => Str::random(2) . '-
            ' . rand(100, 999), 'price' => rand(20,400)],
            ['name' => Str::random(10), 'number' => Str::random(2) . '-
            ' . rand(100, 999), 'price' => rand(20,400)],
            ['name' => Str::random(10), 'number' => Str::random(2) . '-
            ' . rand(100, 999), 'price' => rand(20,400)],
            ]);
            

    }
}
