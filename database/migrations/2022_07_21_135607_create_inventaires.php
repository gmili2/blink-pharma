<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventaires extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('quantite_physique');
            $table->string('quantite_systeme');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
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
        Schema::dropIfExists('inventaires');
    }
}
