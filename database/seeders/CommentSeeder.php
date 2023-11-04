<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class CommentSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('comments')->insert([
            'status' => 'en ligne',
            'pseudo' => 'Rolex3002',
            'publication_date' => '2023/04/09',
            'content' => "contenu",
        ]);

        DB::table('comments')->insert([
            'status' => 'en attente',
            'pseudo' => 'Davinci140',
            'publication_date' => '2023/04/11',
            'content' => "contenu",
        ]);
    }
}
