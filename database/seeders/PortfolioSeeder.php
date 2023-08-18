<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $img = ['portfolio-1.jpg', 'portfolio-1.jpg', 'portfolio-1.jpg', 'portfolio-3.jpg', 'portfolio-2.jpg'];
        $negd_qiymet = ['600', '458', '859', '1000', '565'];
        $kredit_qiymet = ['600', '458', '859', '1000', '565'];
$satis_novu=[1,1,1,1,1];
        $title = ['salam', 'salam', 'salam', 'salam', 'salam'];
        $des = ['simply dummy text of the printing and typesettin',
            'simply dummy text of the printing and typesettin',
            'simply dummy text of the printing and typesettin',
            'simply dummy text of the printing and typesettin',
            'simply dummy text of the printing and typesettin'];
        $mehsul_haqqinda= ['elcin', 'kenan', 'elxan', 'nadir', 'murad'];
        $port_id = [1, 2, 3, 1, 2];
        $status=[1,1,1,1,1];
        $ilkin_odenis=[120,150,100,110,100];
        $ayliq_odenis=[100,85,100,85,90];
        $kredit_muddeti=[3,5,5,4,3];

        for ($i = 0; $i < 5; $i++) {
            DB::table('portfolios')->insert([
                'image' => $img[$i],
                'mehsul_haqqinda' => $mehsul_haqqinda[$i],
                'negd_qiymet' => $negd_qiymet[$i],
                'portfoliocategory_id' => $port_id[$i],
                'description' => $des[$i],
                'title'=>$title[$i],
                'status'=>$status[$i],
                'satis_novu'=>$satis_novu[$i],
                'kredit_qiymet'=>$kredit_qiymet[$i],
                'ilkin_odenis'=>$ilkin_odenis[$i],
                'ayliq_odenis'=>$ayliq_odenis[$i],
                'kredit_muddeti'=>$kredit_muddeti[$i],
            ]);

        }


    }
}
