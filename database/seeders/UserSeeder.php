<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        //     ]);
        $users= DB::table('users')->get()->random(1);
        $user=$users[0];
        $id=$user->id;
        DB::table('tasks')->insert([
            'user_id'=> $id,
            'title' => Str::random(10),
            'completed' => random_int(0,9),

                ]);
    }
}
