<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PekerjaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pekerjaan')->insert(['nama' => 'Belum/Tidak Bekerja']);
        DB::table('pekerjaan')->insert(['nama' => 'Mengurus Rumah Tangga']);
        DB::table('pekerjaan')->insert(['nama' => 'Pelajar/Mahasiswa']);
        DB::table('pekerjaan')->insert(['nama' => 'Pensiunan']);
        DB::table('pekerjaan')->insert(['nama' => 'Pegawai Negeri Sipil']);
        DB::table('pekerjaan')->insert(['nama' => 'Tentara Nasional Indonesia']);
        DB::table('pekerjaan')->insert(['nama' => 'Kepolisian RI']);
        DB::table('pekerjaan')->insert(['nama' => 'Perdagangan']);
        DB::table('pekerjaan')->insert(['nama' => 'Petani/Pekebun']);
        DB::table('pekerjaan')->insert(['nama' => 'Peternak']);
        DB::table('pekerjaan')->insert(['nama' => 'Nelayan/Perikanan']);
        DB::table('pekerjaan')->insert(['nama' => 'Industri']);
    }
}
