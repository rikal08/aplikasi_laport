<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            [
                'nisn'=>'345678',
                'nama_siswa'=>'Rendi Saputra',
                'jk'=>'L',
                'id_kelas'=>1,
                'tingkatan'=>7,
                'id_user'=>4
            ],
            [
                'nisn'=>'667789',
                'nama_siswa'=>'Putra Jaya',
                'jk'=>'L',
                'id_kelas'=>2,
                'tingkatan'=>7,
                'id_user'=>5
            ],
        ]);
    }
}
