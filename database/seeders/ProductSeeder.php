<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=> 'Mobile phone',
            'detail' => Str::random(10),
        ]);

        DB::table('products')->insert([
            'name'=> 'TV',
            'detail' => Str::random(10),
        ]);
        DB::table('products')->insert([
            'name'=> 'Playstation',
            'detail' => Str::random(10),
        ]);
           
    }
}
