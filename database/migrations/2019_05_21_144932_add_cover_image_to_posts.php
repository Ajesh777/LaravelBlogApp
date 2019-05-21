<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoverImageToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // 30.1: Add cover_image to posts table
            Schema::table('posts', function($table){
                $table->string('cover_image');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // 30.1: To rollback or Drop cover_image to posts table
            Schema::table('posts', function($table){
                $table->dropColumn('cover_image');
            });
        });
    }
}
