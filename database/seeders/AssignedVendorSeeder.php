<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\AssignedVendor;
use Illuminate\Database\Seeder;

class AssignedVendorSeeder extends Seeder
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
    		AssignedVendor::insert([
    			'value' => $faker->company,
    		]);
    }
}
}
