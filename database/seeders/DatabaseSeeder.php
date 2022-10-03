<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\eleves;
use Illuminate\Database\Seeder;
use Database\Seeders\BatimentsSeeder;
use Database\Seeders\FormationsSeeder;
use Database\Seeders\TypeformationsSeeder;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([BatimentsSeeder::class,]);
        $this->call([FormationsSeeder::class,]);
        $this->call([TypeformationsSeeder::class,]);
        eleves::factory(50)->create();
    }
}
