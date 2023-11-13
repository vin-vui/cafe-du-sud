<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class MessageSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('messages')->insert([
            'surname' => 'legrand',
            'name' => 'Louis',
            'email' => 'Louis.Legrand@gmail.com',
            'phone' => '655112536',
            'content' => "je m'appelle louis et je pense que vous devriez faire un atelier pate a cookie",
        ]);
    }
}
