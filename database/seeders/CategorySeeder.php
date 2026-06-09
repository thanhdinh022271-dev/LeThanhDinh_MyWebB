<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $categories = [];

        for ($i = 1; $i <= 10; $i++) {
            $name = ucfirst($faker->words(2, true));
            $categories[] = [
                'catename' => $name,
                'slug' => Str::slug($name) . '-' . $faker->unique()->numberBetween(1, 1000),
                'image' => $faker->optional()->imageUrl(640, 480, 'technics', true),
                'status' => $faker->randomElement([0, 1]),
                'sort_order' => $faker->numberBetween(1, 20),
                'description' => $faker->sentence(10),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('categories')->insert($categories);
    }
}
