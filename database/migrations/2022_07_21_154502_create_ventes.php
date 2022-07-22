<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('quantite');
            $table->datetime('date_effectuer')->nullable();
            $table->datetime('deleted_at')->nullable();

            $table->string('game');
            $table->unsignedBigInteger('produits_id');
            $table->unsignedBigInteger('fournisseurs_id');

            // $table->integer('types_id')->unsigned();
            // $table->foreign('types_id')->references('id')->on('types');
            $table->foreign('produits_id')->references('id')->on('produits');
            $table->foreign('fournisseurs_id')->references('id')->on('fournisseurs');

            // $table->foreignId('produits_id')
            //       ->constrained('produits'); 
            // $table->foreignId('client_id')
            //       ->constrained('clients');       
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
        Schema::dropIfExists('ventes');
    }
}
