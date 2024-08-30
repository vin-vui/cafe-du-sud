<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TagSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('tags')->insert([
            'name' => 'Exposition',
            'description' => "mettre ce tag pour les expositions",
        ]);

        DB::table('tags')->insert([
            'name' => 'Atelier',
            'description' => "mettre ce tag pour les ateliers",
        ]);
    }
}
