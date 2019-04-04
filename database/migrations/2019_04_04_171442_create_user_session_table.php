<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_session', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('user_type', ['admin', 'average'])->default('average');
            $table->integer('session_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('session_id')->references('id')->on('sessions');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::table('user_session', function (Blueprint $table) {
            $table->dropForeign('session_id');
            $table->dropForeign('user_id');
        });
        Schema::dropIfExists('user_session');
    }
}
