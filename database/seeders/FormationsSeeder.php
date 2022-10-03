<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            [
                'nom' => "Oceanographe",
                'description' => "Etude de l'Océan."
            ],

            [
                'nom' => "Ichtyologie",
                'description' => "Etude des poissons."
            ],

            [
                'nom' => "Malacologie",
                'description' => "Etude des mollusques"
            ],

            [
                'nom' => "Cétologie",
                'description' => "Etude des cétacés."
            ],
            [
                'nom' => "Phycologie",
                'description' => "Etude des algues."
            ],
            [
                'nom' => "Conchyliologie",
                'description' => "Etude des mollusques à coquilles."
            ],

            ]);
    }
}
