<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class CommentaireSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('commentaires')->insert([
            'statut' => 'en ligne',
            'pseudo' => 'Rolex3002',
            'date_publication' => '2023/04/09',
            'contenu' => "contenu",
        ]);

        DB::table('commentaires')->insert([
            'statut' => 'en attente',
            'pseudo' => 'Davinci140',
            'date_publication' => '2023/04/11',
            'contenu' => "contenu",
        ]);
    }
}
