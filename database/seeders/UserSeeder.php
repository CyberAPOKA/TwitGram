<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();


        DB::table('users')->insert([
            'email' => 'oficialsteffens@hotmail.com',
            'name'          => 'Christian André Steffens',
            'user' => 'apoka',
            'password'      => Hash::make('123123123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'email' => 'maguila@hotmail.com',
            'name' => 'MAGULOSO',
            'user' => 'katy',
            'password'      => Hash::make('123123123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        foreach (range(1, 10) as $index) {
            DB::table('users')->insert([
                'email' => $faker->unique()->email,
                'name'          => $faker->name,
                'user' => $faker->unique()->slug(),
                'password'      => Hash::make('secret'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
