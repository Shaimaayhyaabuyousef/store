<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $categoryIds = DB::table('categories')->pluck('id');
        foreach ( range(1,10) as $index) {
            DB::table('products')->insert([
                'product_name' => $faker->name(),
                'details' => $faker->word(),
                'price' => $faker->numberBetween(10,200),
                'image' => $faker->imageUrl(),
                'category_id' => $categoryIds->random()
                ]);
        }
    }
}
