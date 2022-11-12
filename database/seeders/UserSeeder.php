<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'level' => 1
            ],
            [
                'name' => 'Suci Putri,Sp.d',
                'email' => 'suci@gmail.com',
                'password' => Hash::make('123'),
                'level' => 3
            ],
            [
                'name' => 'Hartono, Sp.d',
                'email' => 'hartono@gmail.com',
                'password' => Hash::make('123'),
                'level' => 3
            ],
            [
                'name' => 'Rendi Saputra',
                'email' => 'rendi@gmail.com',
                'password' => Hash::make('123'),
                'level' => 4
            ],
            [
                'name' => 'Putra Jaya',
                'email' => 'putra@gmail.com',
                'password' => Hash::make('123'),
                'level' => 4
            ],
            [
                'name' => 'Bambang Suryono',
                'email' => 'bambang@gmail.com',
                'password' => Hash::make('123'),
                'level' => 2
            ],
        ]);
    }
}
