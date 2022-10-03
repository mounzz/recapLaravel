<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ElevesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eleves')->insert([
            [
                'nom' => Faker::create()->lastName,
                'prenom' => Faker::create()->firstName,
                'age' => Faker::create()->numberBetween($min = 15, $max = 75),
                'etat' => Faker::create()->boolean($chanceOfGettingTrue = 50),
            ]
            ]);
    }
}
