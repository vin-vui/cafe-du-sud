<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class TagSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('tags')->insert([
            'name' => 'Exposition',
            'status' => "en ligne",
            'description' => "mettre ce tag pour les expositions",
        ]);

        DB::table('tags')->insert([
            'name' => 'Atelier',
            'status' => "en ligne",
            'description' => "mettre ce tag pour les ateliers",
        ]);
    }
}
