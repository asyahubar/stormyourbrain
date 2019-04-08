<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('body');
            $table->integer('rating')->nullable()->unsigned();
            $table->enum('eliminated', ['undecided', 'eliminated', 'final'])->default('undecided');
            $table->integer('session_id')->unsigned();
            $table->bigInteger('created_by')->unsigned();
            $table->foreign('session_id')->references('id')->on('sessions');
            $table->foreign('created_by')->references('id')->on('users');
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
        Schema::table('ideas', function (Blueprint $table) {
            $table->dropForeign('session_id');
            $table->dropForeign('created_by');
        });
        Schema::dropIfExists('ideas');
    }
}
