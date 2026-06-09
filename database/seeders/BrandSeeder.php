<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [];

        for ($i = 1; $i <= 10; $i++) {
            $name = 'Brand ' . ucfirst(Str::random(5));
            $brands[] = [
                'brandname' => $name,
                'slug' => Str::slug($name) . '-' . $i,
                'image' => 'brand-' . $i . '.jpg',
                'status' => rand(0, 1),
                'sort_order' => rand(0, 10),
                'description' => fake()->sentence(10),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('brands')->insert($brands);
    }
}
