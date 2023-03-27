<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableEmployeObjectif extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_objectif', function (Blueprint $table) {
            $table->id();
            //*$table->foreignId('user_id')->constrained()->onDelete('cascade');
            
          
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('objectif_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('objectif_id')->references('id')->on('objectifs');

            //*$table->foreignId('objectif_id')->constrained()->onDelete('cascade');

            


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
        Schema::dropIfExists('employe_objectif');
    }
}
