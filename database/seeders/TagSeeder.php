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
            'name' => 'Evenement',
            'status' => "en ligne",
            'description' => "mettre ce tag pour les evenements passés ou a venir",
        ]);

        DB::table('tags')->insert([
            'name' => 'Présentation',
            'status' => "en ligne",
            'description' => "mettre ce tag pour les présentations d'artistes ou d'oeuvres",
        ]);
    }
}
