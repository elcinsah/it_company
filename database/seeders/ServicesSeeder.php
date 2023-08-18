<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $div_color=['pink','cyan','green','blue'];
        $icon=['dribbble','bx bx-file','tachometer','bx bx-world'];
        $description=[' It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            ' It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            ' It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            ' It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.'];
        $status=[1,1,1,1];
        $title=['Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet'];
        for ($i=0;$i<4;$i++) {
            DB::table('services')->insert([
              'div_color'=>$div_color[$i],
            'description'=>$description[$i],
                'title'=>$title[$i],
                'status'=>$status[$i],
                'icon'=>$icon[$i],

            ]);
        }
    }
}
