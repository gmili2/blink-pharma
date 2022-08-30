<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Caisses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caisses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('creer_par');
            $table->integer('premier_vente_id')->nullable();;
            $table->integer('dernier_vente_id')->nullable(); 
            $table->integer('montant_sys')->nullable();   
            $table->integer('montant_caisse')->nullable();   
            $table->integer('gane')->nullable();   
            $table->datetime('deleted_at')->nullable();
            $table->timestamps();
        });
        //
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
