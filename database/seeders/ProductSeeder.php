<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        foreach(range(1,10) as $index){
            DB::table('products')->insert([
                [
                    'name' => $faker->name(),
                    'price' =>$faker->randomNumber($nbDigits = NULL, $strict = false),
                    'category_id' => $faker->numberBetween(1,3),
                ],
            ]);
        }

    }
}
