<?php

namespace Database\Seeders;

use App\Models\UOM;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UomSeeder extends Seeder
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
                'value' => 'EHB'
            ],
            [
                'value' => 'SHP'
            ],
        ];
        \DB::table('uom')->insert($table);
    }
}
