<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'category 1'
            ],
            [
                'name' => 'category 2'
            ],
            [
                'name' => 'category 3'
            ],
        ]);
    }
}
