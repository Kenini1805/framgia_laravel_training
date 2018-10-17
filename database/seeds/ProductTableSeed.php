<?php

use Illuminate\Database\Seeder;

class ProductTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 10; $i++) { 
        	# code...
	        DB:table('products')->insert([
	        	'product_name' => str_random(50),
	        	'price' => str_random(1000000),
	        	'quantity' => str_random(1),
	        	'description' => str_random(100),
	        	'hot' => 1
	        ]);
        }

        // factory(App\Models\Product::class, 5)->create();
    }
}
