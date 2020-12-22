<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NagariTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nagari')->insert(['nama' => 'Ampalu']);
        DB::table('nagari')->insert(['nama' => 'Halaban']);
        DB::table('nagari')->insert(['nama' => 'Sitanang']);
    }
}
