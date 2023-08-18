<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $name = ['kenan', 'elxan', 'murad'];
        $job = ['developer', 'mobile', 'developer'];
        $img = ['7321688721426.png', '7321688721426.png', '7321688721426.png'];
        $des = ['salam salmaakjkjdka', 'salam salmaakjkjdka', 'salam salmaakjkjdka'];
        $status = [1, 1, 1];
        for ($i = 0; $i < 3; $i++) {
            DB::table('teams')->insert([
                'description' => $des[$i],
                'status' => $status[$i],
                'image' => $img[$i],
                'job' => $job[$i],
                'name' => $name[$i],

            ]);
        }

    }
}
