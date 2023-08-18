<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\portfoliocategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
          PortfoliocategorySeeder::class,
            PortfolioSeeder::class,
            ContactEmailPhoneSeeder::class,
            ContactlocationSeeder::class,
            AboutSeeder::class,
            AboutInfoSeeder::class,
            TeamSeeder::class,
            ServicesSeeder::class,
            UserSeeder::class,
            HomeSeeder::class,
            HomelinkSeeder::class,
            SosoialSeeder::class,

        ]);
    }
}
