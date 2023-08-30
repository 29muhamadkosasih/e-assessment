<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKompetensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kompetensi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nama_skema_id');
            $table->foreign('nama_skema_id')->references('id')->on('skema')->onDelete('cascade');
            $table->string('no_skkni');
            $table->longText('kode');
            $table->longText('kode2');
            $table->longText('kode3');
            $table->longText('kode4');
            $table->longText('kode5');
            $table->longText('kode6');
            $table->longText('kode7');
            $table->longText('kode8');
            $table->longText('unit_kompetensi');
            $table->longText('unit_kompetensi2');
            $table->longText('unit_kompetensi3');
            $table->longText('unit_kompetensi4');
            $table->longText('unit_kompetensi5');
            $table->longText('unit_kompetensi6');
            $table->longText('unit_kompetensi7');
            $table->longText('unit_kompetensi8');
            $table->longText('element_kompetensi');
            $table->longText('element_kompetensi2');
            $table->longText('element_kompetensi3');
            $table->longText('element_kompetensi4');
            $table->longText('element_kompetensi5');
            $table->longText('element_kompetensi6');
            $table->longText('element_kompetensi7');
            $table->longText('element_kompetensi8');
            $table->longText('kuk');
            $table->longText('kuk2');
            $table->longText('kuk3');
            $table->longText('kuk4');
            $table->longText('kuk5');
            $table->longText('kuk6');
            $table->longText('kuk7');
            $table->longText('kuk8');
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
        Schema::dropIfExists('kompetensi');
    }
}