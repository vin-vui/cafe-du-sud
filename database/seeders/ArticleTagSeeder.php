<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class ArticleTagSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('article_tag')->insert([
            'article_id' => 1,
            'tag_id' => 1,
        ]);
    }
}
