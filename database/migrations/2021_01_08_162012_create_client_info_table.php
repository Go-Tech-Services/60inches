<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_info', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->string('client_name');
            $table->string('phone')->index('phone')->unique();
            $table->string('altern_phone');  
            $table->string('email');
            $table->date('birth_date');
            $table->text('client_address');
            $table->text('client_city');
            $table->text('pin_code');
            $table->string('url')->index('url')->nullable();
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
        Schema::dropIfExists('client_info');
    }
}
