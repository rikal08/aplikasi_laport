<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TahunAjaran extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tahun_ajaran')->insert([
            [
                'semester' => 'Ganjil',
                'tahun_ajaran'=> '2022/2023',
                'status'=>1 #aktif
            ],
            [
                'semester' => 'Genap',
                'tahun_ajaran'=> '2022/2023',
                'status'=>2 #non aktif
            ],
        ]);
    }
}
