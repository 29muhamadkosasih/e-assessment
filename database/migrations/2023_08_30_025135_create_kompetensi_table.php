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
            $table->longText('kode2')->nullable();
            $table->longText('kode3')->nullable();
            $table->longText('kode4')->nullable();
            $table->longText('kode5')->nullable();
            $table->longText('kode6')->nullable();
            $table->longText('kode7')->nullable();
            $table->longText('kode8')->nullable();
            $table->longText('kode9')->nullable();
            $table->longText('kode10')->nullable();
            $table->longText('unit_kompetensi');
            $table->longText('unit_kompetensi2')->nullable();
            $table->longText('unit_kompetensi3')->nullable();
            $table->longText('unit_kompetensi4')->nullable();
            $table->longText('unit_kompetensi5')->nullable();
            $table->longText('unit_kompetensi6')->nullable();
            $table->longText('unit_kompetensi7')->nullable();
            $table->longText('unit_kompetensi8')->nullable();
            $table->longText('unit_kompetensi9')->nullable();
            $table->longText('unit_kompetensi10')->nullable();
            $table->longText('element_kompetensi');
            $table->longText('element_kompetensi2')->nullable();
            $table->longText('element_kompetensi3')->nullable();
            $table->longText('element_kompetensi4')->nullable();
            $table->longText('element_kompetensi5')->nullable();
            $table->longText('element_kompetensi6')->nullable();
            $table->longText('element_kompetensi7')->nullable();
            $table->longText('element_kompetensi8')->nullable();
            $table->longText('element_kompetensi9')->nullable();
            $table->longText('element_kompetensi10')->nullable();
            $table->longText('kuk');
            $table->longText('kuk2')->nullable();
            $table->longText('kuk3')->nullable();
            $table->longText('kuk4')->nullable();
            $table->longText('kuk5')->nullable();
            $table->longText('kuk6')->nullable();
            $table->longText('kuk7')->nullable();
            $table->longText('kuk8')->nullable();
            $table->longText('kuk9')->nullable();
            $table->longText('kuk10')->nullable();
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