<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password=123456;
        DB::table('users')->insert([
          'name'=>"elcin" ,
          'password'=>bcrypt($password),
          'email'=>'admin@admin.com',
        ]);
    }
}
