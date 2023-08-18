<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title = ['Müşteriler', 'Proyektler', 'Servizler', 'Ayliq-Servizler'];
        $title_count = [1054, 2500, 3000, 50];
        for ($i = 0; $i < 4; $i++) {

            DB::table('about_infos')->insert([
                'title' => $title[$i],
                'title_count' => $title_count[$i],
            ]);
        }
    }
}
