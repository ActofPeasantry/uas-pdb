<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(NagariTableSeeder::class);
        $this->call(JorongTableSeeder::class);
        $this->call(PekerjaanTableSeeder::class);
        $this->call(KewarganegaraanTableSeeder::class);
        $this->call(LevelPendidikanTableSeeder::class);
    }
}
