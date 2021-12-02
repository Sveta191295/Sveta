<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'item_name' => 'mobile',
            'price' => 1000
        ]);
         DB::table('items')->insert([
            'item_name' => 'laptop',
            'price' => 2000
        ]);
          DB::table('items')->insert([
            'item_name' => 'camera',
            'price' => 500
        ]);
           DB::table('items')->insert([
            'item_name' => 'ipod',
            'price' => 200
        ]);
            DB::table('items')->insert([
            'item_name' => 'tabs',
            'price' => 800
        ]);
    }
}
