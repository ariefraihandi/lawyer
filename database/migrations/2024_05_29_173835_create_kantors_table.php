<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKantorsTable extends Migration
{
    public function up()
    {
        Schema::create('kantors', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kantor');
            $table->string('email_kantor')->unique();
            $table->string('hp_whatsapp');
            $table->date('tanggal_pendirian');
            $table->string('alamat');
            $table->string('kode_pos');
            $table->string('provinsi');
            $table->string('kabupaten_kota');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('website')->nullable();
            $table->text('slogan')->nullable();
            $table->string('logo')->nullable();
            $table->string('dokumen_pendirian')->nullable();
            $table->boolean('agreement')->default(false);
            $table->integer('paket')->default(0);
            $table->string('referedby');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kantors');
    }
}
