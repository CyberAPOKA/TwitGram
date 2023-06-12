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
