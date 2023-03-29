<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
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
                'value' => 'USD'
            ],
            [
                'value' => 'AED'
            ],
        ];
        \DB::table('currency')->insert($table);
    }
}
