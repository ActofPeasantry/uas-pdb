<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelPendidikanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('level_pendidikan')->insert(['nama' => 'Belum/Tidak Berpendidikan']);
        DB::table('level_pendidikan')->insert(['nama' => 'TK']);
        DB::table('level_pendidikan')->insert(['nama' => 'SD']);
        DB::table('level_pendidikan')->insert(['nama' => 'SMP']);
        DB::table('level_pendidikan')->insert(['nama' => 'SMA/SMK']);
        DB::table('level_pendidikan')->insert(['nama' => 'Sarjana (S1)']);
        DB::table('level_pendidikan')->insert(['nama' => 'Magister (S2)']);
        DB::table('level_pendidikan')->insert(['nama' => 'Doktor/Profesor (S3)']);
    }
}
