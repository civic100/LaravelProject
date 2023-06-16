<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Create a new instance of AdminSeeder
        $this->call([
            UserTableSeeder::class
        ]);
        //Create a new instance of RaceSeeder
        $this->call([
            RacesTableSeeder::class
        ]);
        //Create a new instance of InsurerSeeder
        $this->call([
            InsurersTableSeeder::class
        ]);
        //Create a new instance of SponsorSeeder
        $this->call([
            SponsorsTableSeeder::class
        ]);
        //Create a new instance of RaceInsurerSeeder
        $this->call([
            RaceInsurersTableSeeder::class
        ]);
        //Create a new instance of RaceSponsorsSeeder
        $this->call([
            RaceSponsorsTableSeeder::class
        ]);
        //Create a new instance of RunnerSeeder
        $this->call([
            RunnersTableSeeder::class
        ]);

    }
}
