<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeBlogPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            //

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('NO ACTION')
                ->onUpdate('CASCADE');

            $table->foreign('categories_id')
                ->references('id')
                ->on('blog_categories')
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
        Schema::table('blog_posts', function (Blueprint $table) {
            //
            $table->dropForeign('blog_posts_categories_id_foreign');
            $table->dropForeign('blog_posts_user_id_foreign');

            $table->dropColumn('categories_id');
            $table->dropColumn('user_id');
        });
    }
}
