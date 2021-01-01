<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreOwnerInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_owner_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('owner_name');
            $table->string('store_name')->unique();
            $table->text('store_address');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('store_logo');
            $table->string('url');
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('store_owner_info', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('store');
            $table->foreign('updated_by')->references('id')->on('store');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_owner_info');
    }
}
