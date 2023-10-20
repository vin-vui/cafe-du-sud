<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class NewsletterSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('newsletter')->insert([
            'email' => 'courgette@gmail.com',
        ]);

        DB::table('newsletter')->insert([
            'email' => 'boson@gmail.com',
        ]);


        DB::table('newsletter')->insert([
            'email' => 'abeille@gmail.com',
        ]);
    }
}
