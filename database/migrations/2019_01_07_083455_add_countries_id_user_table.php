<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCountriesIdUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->integer('countries_id')->unsigned()->nullable();

            $table->foreign('countries_id')
                ->references('id')
                ->on('countries')
                ->onDelete('NO ACTION')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropForeign('users_countries_id_foreign');
            $table->dropColumn('countries_id');
        });
    }
}
