<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('matricule');
            $table->string('adresse');
            $table->string('sexe');
            $table->string('poste');
            $table->string('contact');
            $table->date('date_naissance')->format('dd/mm/yy');
            $table->string('avatar')->default('/assets/img/profiles/avatar.png');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_admin');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
