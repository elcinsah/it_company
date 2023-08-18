<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfoliocategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrs=['web','sebeke','camera'];
        foreach ($arrs as $arr){

            DB::table('portfoliocategories')->insert([
                'name' => $arr,



            ]);

        }


    }
}
