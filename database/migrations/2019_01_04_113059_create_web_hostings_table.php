<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebHostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_hostings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('login');
            $table->string('adm_password');
            $table->string('tech_password');
            $table->string('email');
            $table->string('phone');
            $table->string('link');
            $table->string('owner');
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
        Schema::dropIfExists('web_hostings');
    }
}
