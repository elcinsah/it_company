<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $image = "about.jpg";
        $title = "Bizin sirket It sahesi Uzra Qurulub";
        $des = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, ";
        $slider_des = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, ";
        $status = 1;
        DB::table('abouts')->insert([

            'title' => $title,
            'image' => $image,
            'description' => $des,
            'description_slider' => $slider_des,
            'status' => $status


        ]);

    }
}
