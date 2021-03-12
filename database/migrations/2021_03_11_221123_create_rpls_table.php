<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRplsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rpls', function (Blueprint $table) {
            $table->id();
            $table->text('berdiri');
            $table->text('keahlian');
            $table->text('model_belajar');
            $table->text('pohon_kompetensi');
            $table->text('cbt');
            $table->text('keunggulan');
            $table->text('sertifikasi');
            $table->string('gambar')->nullable();
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
        Schema::dropIfExists('rpls');
    }
}
