<?php

namespace Database\Seeders;

use App\Models\InvoiceTo;
use Faker\Factory as Faker;    
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 10; $i++){
    		InvoiceTo::insert([
    			'value' => $faker->buildingNumber,
    		]);
    }
    }
}
