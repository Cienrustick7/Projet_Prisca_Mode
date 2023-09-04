<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'JOYEUSE SARAH',
            'email' =>'joysah@gmail.com',
            'password' => Hash::make('Sarah@2023'),
        ]);

        DB::table('users')->insert([
            'name' => 'RUCIEN MARAYO',
            'email' =>'rucienmarayo11@gmail.com',
            'password' => Hash::make('Ruciana@2023'),
        ]);

        DB::table('users')->insert([
            'name' => 'STEVIE ROSE',
            'email' =>'steve03@gmail.com',
            'password' => Hash::make('Stevie@2023'),
        ]);
    }
}
