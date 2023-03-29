<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChargeToSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = [
            [
                'value' => 'Logistic'
            ],
            [
                'value' => 'Supplier'
            ],
        ];
        \DB::table('chargeto')->insert($table);
    }
}
