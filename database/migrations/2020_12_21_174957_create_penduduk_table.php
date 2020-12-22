<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->string('status_keluarga');
            $table->string('ayah');
            $table->string('ibu');
            $table->timestamps();

            $table->foreignID('keluarga_id')->constrained('kartu_keluarga');
            $table->foreignID('level_pendidikan_id')->constrained('level_pendidikan');
            $table->foreignID('pekerjaan_id')->constrained('pekerjaan');
            $table->foreignID('kewarganegaraan_id')->constrained('kewarganegaraan');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduk');
    }
}
