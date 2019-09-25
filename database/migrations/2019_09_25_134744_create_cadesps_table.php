<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadespsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadesps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nirf');
            $table->string('ccir');
            $table->string('hectar_nirf');
            $table->string('hectar_ccir');
            $table->string('matricula');
            $table->unsignedBigInteger('farm_id');
            $table->foreign('farm_id')->references('id')->on('farms');
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
        Schema::dropIfExists('cadesps');
    }
}
