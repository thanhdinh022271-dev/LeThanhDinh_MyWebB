<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [];

        for ($i = 1; $i <= 8; $i++) {
            $fullname = fake()->name();
            $username = fake()->unique()->userName();
            $phone = preg_replace('/[^0-9]/', '', fake()->unique()->phoneNumber());
            $users[] = [
                'fullname' => $fullname,
                'username' => substr($username, 0, 30),
                'email' => fake()->unique()->safeEmail(),
                'password' => bcrypt('password'),
                'phone' => substr($phone, 0, 20),
                'address' => fake()->address(),
                'gender' => fake()->randomElement([0, 1, 2]),
                'birthday' => fake()->date('Y-m-d', '-18 years'),
                'role' => fake()->randomElement([1, 2]),
                'status' => fake()->randomElement([0, 1]),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('users')->insert($users);
    }
}
