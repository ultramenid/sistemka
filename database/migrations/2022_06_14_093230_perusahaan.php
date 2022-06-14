<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string('perusahaan');
            $table->string('group_usaha');
            $table->float('kapasitas');
            $table->integer('jam');
            $table->integer('hari');
            $table->float('konversi');
            $table->integer('produksi_cpo_estimasi');
            $table->integer('tbs_diolah_estimasi');
            $table->integer('realisasiproduksitahunanton');
            $table->integer('realisasitbstahunanton');
            $table->timestamp('estyear');
            $table->integer('kodeprov');
            $table->integer('kodekab');
            $table->string('kab');
            $table->string('prov');
            $table->string('lat');
            $table->string('long');
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
        Schema::dropIfExists('perusahaan');
    }
};
