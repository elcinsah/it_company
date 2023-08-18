<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactlocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('contactlocations')->insert([
            'map'=>"https://goo.gl/maps/j4fXmzcykrXzdqvp8",
        'address_title'=>"adresimiz",
       'email_title'=>"Email",
       'phone_title'=>'Telefon',
       'address'=>"bineqedi rayonu mircelal",
       'email_icon'=>"bx bx-envelope",
       'phone_icon'=>"bx bx-phone-call",
        'address_icon'=>"bx bx-map",


        ]);


    }
}
