<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParnershipAgriculturalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parnership_agriculturals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('farmer_id');
            $table->unsignedBigInteger('agricultural_id');
            $table->decimal('percent', 3,2);
            $table->timestamps();


            $table->foreign('farmer_id')->references('id')->on('farmers');
            $table->foreign('agricultural_id')-references('id')->on('agriculturals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parnership_agriculturals');
    }
}
