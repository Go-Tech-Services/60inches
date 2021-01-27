<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('client_id')->nullable();
            $table->string('neck');
            $table->string('shoulder');
            $table->string('upper_bust');
            $table->string('bust');
            $table->string('cup');
            $table->string('under_bust');
            $table->string('upper_waist');
            $table->string('hips');
            $table->string('knee');
            $table->string('ankle');
            $table->string('thigh_round');
            $table->string('calf_round');
            $table->string('dark_point');
            $table->string('fork');
            $table->string('shoe_size');
            $table->integer('isprimary_flag')->default(0);
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
        Schema::dropIfExists('measurements');
    }
}
