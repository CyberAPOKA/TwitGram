<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $users = User::where('id', '>', 0)->get();

        foreach ($users as $user) {
            DB::table('user_profiles')->insert([
                'user_id'       => $user->id,
                'name'          => $faker->name,
                'created_at'    => now(),
                'updated_at'    => now()
            ]);
        }
    }
}
