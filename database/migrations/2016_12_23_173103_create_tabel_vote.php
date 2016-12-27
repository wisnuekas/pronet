<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelVote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('vote', function (Blueprint $table) {
          $table->integer('id_user')->unsigned();
          $table->integer('id_pemira')->unsigned();
          $table->timestamps();

          $table->foreign('id_user')
                ->references('id')->on('users')
                ->onDelete('cascade');

          $table->foreign('id_pemira')
                ->references('id')->on('pemiras')
                ->onDelete('cascade');
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
    }
}
