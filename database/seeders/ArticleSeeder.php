<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class ArticleSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('articles')->insert([
            'titre' => 'Atelier theatre improvisation',
            'contenu' => "contenu",
            'type' => 'evenement',
            'url' => 'https://www.theatreinparis.com/uploads/images/article/la-nouvelle-seine-petits-theatres-paris-header.jpg',
            'date_publication' => '2023/04/09',
            'date_debut' => '2023/11/12',
            'date_fin' => '2023/12/11',
            'statut' => 'en attente',
        ]);
    }
}
