<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegManuDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Manufacturers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('businessName');
           
            $table->string('street_addr');
            $table->string('suburb');
            $table->string('state');
            $table->bigInteger('post_code');
            $table->bigInteger('contact_no');
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
        Schema::dropIfExists('Manufacturers');
    }
}
