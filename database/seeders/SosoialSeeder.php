<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SosoialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('sosoials')->insert([
        'facebook'=>'https://www.facebook.com/elcin.sahkerimov.7',
          'instagram'=>'https://www.instagram.com/',
            'linkedin'=>'https://az.linkedin.com/',



        ]);

    }
}
