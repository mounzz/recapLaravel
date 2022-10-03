<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeformationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typeformations')->insert([
            [
                'nom' => "Oceanographie1",
            ],
            [
                'nom' => "Oceanographie2",
            ],
            [
                'nom' => "Oceanographie3",
            ],
            [
                'nom' => "Oceanographie4",
            ],
            [
                'nom' => "Ichtyologie1",
            ],
            [
                'nom' => "Ichtyologie2",
            ],
            [
                'nom' => "Ichtyologie3",
            ],
            [
                'nom' => "Cétologie1",
            ],
            [
                'nom' => "Cétologie2",
            ],
            [
                'nom' => "Cétologie3",
            ],
            ]);
    }
}
