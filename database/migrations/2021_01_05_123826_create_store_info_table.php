<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('owner_name');
            $table->string('store_name')->unique();
            $table->text('store_address');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('store_logo')->nullable();
            $table->string('url')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('store_info');
    }
}
