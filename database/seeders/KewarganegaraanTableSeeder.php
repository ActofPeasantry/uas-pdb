<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KewarganegaraanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kewarganegaraan')->insert(['nama' => 'Indonesia']);
        DB::table('kewarganegaraan')->insert(['nama' => 'Afghanistan']);
        DB::table('kewarganegaraan')->insert(['nama' => 'Brunei Darussalam']);
        DB::table('kewarganegaraan')->insert(['nama' => 'Inggris']);
        DB::table('kewarganegaraan')->insert(['nama' => 'Malaysia']);
        DB::table('kewarganegaraan')->insert(['nama' => 'Singapura']);
        DB::table('kewarganegaraan')->insert(['nama' => 'Filipina']);
    }
}
