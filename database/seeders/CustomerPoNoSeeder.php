<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\CustomerPoNo;
use Illuminate\Database\Seeder;

class CustomerPoNoSeeder extends Seeder
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
    		CustomerPoNo::insert([
    			'value' => $faker->buildingNumber,
    		]);
    }
        
    }
}
