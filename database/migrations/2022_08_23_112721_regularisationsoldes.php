<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Regularisationsoldes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regularisationsoldes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('clients_id');
            $table->integer('montant_credit')->nullable();;
            $table->integer('montant_paye')->nullable();   
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
