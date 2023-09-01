<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_detail', function (Blueprint $table) {
            $table->id();
            $table->string('no_pendaftaran');
            $table->unsignedBigInteger('nama_lengkap_id');
            $table->foreign('nama_lengkap_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('kebangsaan');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->string('no_hp');
            $table->unsignedBigInteger('email_id');
            $table->foreign('email_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('pendidikan_terakhir');
            $table->string('nama_perusahaan');
            $table->string('jabatan');
            $table->string('no_hp_perusahaan');
            $table->string('email_perusahaan');
            $table->string('alamat_perusahaan');
            $table->string('ijazah');
            $table->string('surat_keterangan_perusahaan');
            $table->string('cv');
            $table->string('sertifikat_pendukung');
            $table->string('p_cbt');
            $table->string('ktp');
            $table->string('ttd');
            $table->unsignedBigInteger('kompetensi_id');
            $table->foreign('kompetensi_id')->references('id')->on('kompetensi')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_detail');
    }
}
