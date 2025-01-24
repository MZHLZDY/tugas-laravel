<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insert satu data
        // DB::table('users')->insert([
        //     'username' => Str::random(10),
        //     'email' => Str::random(10).'@contoh.com',
        //     'password' => Hash::make('1234')
        // ]);
        //batch
        // for($i=1; $i <=10 ; $i++){
        //     DB::table('users')->insert([
        //         'username' => Str::random(10),
        //         'email' => Str::random(10).'@contoh.com',
        //         'password' => Hash::make('1234')
        //     ]);
        // }
        //bacth with faker
        $faker = faker::create('id_ID');
        for($i=1; $i <=10 ; $i++){
            DB::table('users')->insert([
                'username' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('Admin#1234')
            ]);
        }
    }
}
