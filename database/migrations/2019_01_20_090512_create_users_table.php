<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('idUtilisateur');
            $table->string('nomUtilisateur');
            $table->string('prenomUtilisateur');
            $table->date('Ddn')->nullable();
            $table->string('telUtilisateur')->nullable();
            $table->string('mailUtilisateur');
            $table->string('mdpUtilisateur');
            //$table->string('adresseUtilisateur')->nullable();
            $table->string('role')->default('client');
            $table->boolean('newsletter')->default(0);
            $table->rememberToken();
            //$table->integer('idville')->unsigned();
            //$table->foreign('idville')->references('idville')->on('ville');
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
