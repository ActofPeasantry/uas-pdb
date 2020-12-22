<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JorongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jorong')->insert(['nama' => 'Balai Panjang', 'nagari_id' => '1']);
        DB::table('jorong')->insert(['nama' => 'Bukik Sikumpa', 'nagari_id' => '1']);
        DB::table('jorong')->insert(['nama' => 'Batu Payuang', 'nagari_id' => '1']);

        DB::table('jorong')->insert(['nama' => 'Suayu', 'nagari_id' => '2']);
        DB::table('jorong')->insert(['nama' => 'Panuah Sangik', 'nagari_id' => '2']);
        DB::table('jorong')->insert(['nama' => 'Durian Gadang', 'nagari_id' => '2']);

        DB::table('jorong')->insert(['nama' => 'Durian Tinggi', 'nagari_id' => '3']);
        DB::table('jorong')->insert(['nama' => 'Sialang', 'nagari_id' => '3']);
        DB::table('jorong')->insert(['nama' => 'Galugua', 'nagari_id' => '3']);
    }
}
