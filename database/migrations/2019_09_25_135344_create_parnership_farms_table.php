<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParnershipFarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parnership_farms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('farm_id')->nullable();
            $table->unsignedBigInteger('farmer_id')->nullable();
            $table->unsignedBigInteger('agricultural_id')->nullable();
            $table->decimal('percent', 3,2);
            $table->timestamps();

            $table->foreign('farm_id')->references('id')->on('farms');
            $table->foreign('farmer_id')->references('id')->on('farmers');
            $table->foreign('agriculturals_id')->references('id')->on('agriculturals');

        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parnership_farms');
    }
}
