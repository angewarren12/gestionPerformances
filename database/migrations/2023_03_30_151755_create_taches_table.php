<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taches', function (Blueprint $table) {
            $table->id();
            $table->text('libele');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->text('status');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('objectif_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('objectif_id')->references('id')->on('objectifs');





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
        Schema::dropIfExists('taches');
    }
}
