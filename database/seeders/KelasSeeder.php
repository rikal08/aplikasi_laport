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
                'tingkatan'=>'7',
                'kode_kelas'=>'VII A',
                'id_wali'=>1
            ],
            [
                'tingkatan'=>'7',
                'kode_kelas'=>'VII B',
                'id_wali'=>2
            ],
            [
                'tingkatan'=>'8',
                'kode_kelas'=>'VIII A',
                'id_wali'=>1
            ],
            [
                'tingkatan'=>'8',
                'kode_kelas'=>'VIII B',
                'id_wali'=>2
            ],
            ]);
    }
}
