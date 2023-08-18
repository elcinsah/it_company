<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomelinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $homelinks="https://www.youtube.com/watch?v=QloMdg2bapw&ab_channel=MagicMusicMix";
        $gift="Hediyelermiz";
        $gift_description="bizden 4 kamera alna 100 m kabel hediye bu teklif hem kredit hem negd ucun kecerlidir";
        $cashback='2% cashback';
        $cashback_description="alinan mehsullarin tam qiymetinin 2% i mehsulun odenisinin tamaminda geri qayidir eyer negd odenis olunursa yerinde cashback olunur";


        DB::table('homelinks')->insert([
            'link_home'=>$homelinks,
            'gift'=>$gift,
            'gift_description'=>$gift_description,
            'cashback'=>$cashback,
            'cashback_description'=>$cashback_description,
            'status'=>1,
        ]);
    }
}
