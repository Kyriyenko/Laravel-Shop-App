<?php

namespace Database\Seeders;

use Carbon\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++)
        DB::table('products')->insert([
        'title' => 'product' . $i,
        'price' => rand(200,1555),
        'in_stock' => 1,
        'description' => 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
        ]);
    }
}
