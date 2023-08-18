<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title = ['Kameralarin Negd Ve Kreditle Satisi '
            , 'Web Saytlarin Negd Ve Kreditle Satisi'
            , 'Sebeke Negd Ve Kreditle Satisi'];
        $des = ['is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'
            , 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'
            , 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'];
        for ($i = 0; $i < 3; $i++) {
            DB::table('homes')->insert([
                'title' => $title[$i],
                'description' => $des[$i],
                'status'=>1,

            ]);
        }
    }
}
