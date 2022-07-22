<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFournisseurs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('email')->nullable();
            $table->string('site')->nullable();
            $table->string('fax')->nullable();
            $table->string('tele')->nullable();
            $table->string('ville')->nullable();
            $table->string('adresse')->nullable();
            $table->string('code_postale')->nullable();
            $table->string('description')->nullable();

            $table->string('pays')->nullable();
            $table->datetime('deleted_at')->nullable();
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
        Schema::dropIfExists('fournisseurs');
    }
}
