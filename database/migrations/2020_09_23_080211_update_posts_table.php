<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('posts', function (Blueprint $table) {
            $table->string('title');
            $table->string('sub_title');
            $table->text('description');
            $table->datetime('publication_date');
            $table->boolean('published');
            $table->foreignId('user_id')->constrained();
            //$table->unsignedBigInteger('user_id');
            //$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('sub_title');
            $table->dropColumn('description');
            $table->dropColumn('publication_date');
            $table->dropColumn('published');
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
}
