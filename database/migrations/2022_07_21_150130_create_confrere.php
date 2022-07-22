<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfrere extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confrere', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('firstname');
            $table->string('date_naissance');
            $table->string('titre')->nullable();
            $table->string('tele')->nullable();
            $table->string('fax')->nullable();
            $table->string('site')->nullable();
            $table->string('adresse')->nullable();
            $table->string('code_postal')->nullable();
            $table->string('ville')->nullable();
            $table->string('pays')->nullable();
            $table->string('region')->nullable();
            $table->string('description')->nullable();
            $table->string('email')->unique();
            $table->datetime('deleted_at')->nullable();
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
        Schema::dropIfExists('confrere');
    }
}
