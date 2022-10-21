<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            [
                'kode_kelas'=>'VII A',
                'id_wali'=>1
            ],
            [
                'kode_kelas'=>'VII B',
                'id_wali'=>2
            ]
            ]);
    }
}
