<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // 22.1: Add user_id to posts table
                Schema::table('posts', function($table){
                    $table->integer('user_id');
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
            // 22.1: To rollback or Drop user_id to posts table
                Schema::table('posts', function($table){
                    $table->dropColumn('user_id');
                });
        
        });
    }
}
