<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CustomerContract;
use Faker\Factory as Faker;

class CustomerContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 10; $i++){
    		CustomerContract::insert([
    			'value' => $faker->buildingNumber,
    		]);
    }
    }
}
