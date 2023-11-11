<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin1',
            'email' => "admin1@admin.com",
            'password' => Hash::make('TtCoFKZD^7fn4JJKah4u&AEMd^d*uQ'),
        ]);

        DB::table('users')->insert([
            'name' => 'admin2',
            'email' => "admin2@admin.com",
            'password' => Hash::make('zB$N$n82@n@8qSSYbab7KACH@EpA7B'),
        ]);
    }
}
