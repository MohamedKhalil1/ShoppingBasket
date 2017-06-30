<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        public function run()
    {
    	$faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('products')->insert([
	            'name' => $faker->name,
	            'productimage' => $faker->producttimage
	            'stockquantity' => $faker->stockquantity,
	            'price' => $faker->price,
	        ]);
        }
    }    
}
