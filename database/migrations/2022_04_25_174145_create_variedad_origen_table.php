<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariedadOrigenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variedad_origen', function (Blueprint $table) {
            $table->unsignedBigInteger('variedad_id')->index();
            $table->foreign('variedad_id')->references('id')->on('variedades')->onDelete('cascade');

            $table->unsignedBigInteger('origen_id')->index();
            $table->foreign('origen_id')->references('id')->on('origenes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variedad_origen');
    }
}