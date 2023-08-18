<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactEmailPhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = ['info@example.com', 'contact@example.com'];
        $phone = ['0709310535', '0709310535'];
        $status = [1, 1];

        for ($i = 0; $i < 2; $i++) {
            DB::table('contact_email_phones')->insert([

                'email' => $email[$i],
                'phone' => $phone[$i],
                'status' => $status[$i],

            ]);
        }
    }
}
