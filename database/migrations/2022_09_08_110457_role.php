<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Role extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    
    {
        Schema::create('roles', function (Blueprint $table) {

        $table->bigIncrements('id');
        $table->integer('creer_par');
        $table->string('nom');

        // $table->integer('premier_vente_id')->nullable();;
        $table->integer('produitA')->nullable(); 
        $table->integer('produitM')->nullable(); 
        $table->integer('produitS')->nullable(); 

        $table->integer('venteA')->nullable(); 
        $table->integer('venteM')->nullable();   
        $table->integer('venteS')->nullable();   

        $table->integer('achatA')->nullable(); 
        $table->integer('achatM')->nullable(); 
        $table->integer('achatS')->nullable(); 


        $table->integer('parametreA')->nullable(); 
        $table->integer('parametreM')->nullable(); 
        $table->integer('parametreS')->nullable();
        
        $table->integer('confrereA')->nullable(); 
        $table->integer('confrereM')->nullable(); 
        $table->integer('confrereS')->nullable(); 
        
        $table->integer('fournisseurA')->nullable(); 
        $table->integer('fournisseurM')->nullable(); 
        $table->integer('fournisseurS')->nullable(); 


        $table->integer('importationA')->nullable(); 
        $table->integer('importationM')->nullable(); 
        $table->integer('importationS')->nullable(); 

        $table->integer('caisseA')->nullable(); 
        $table->integer('caisseM')->nullable(); 
        $table->integer('caisseS')->nullable();
        
        
        $table->integer('stockA')->nullable(); 
        $table->integer('stockM')->nullable(); 
        $table->integer('stockS')->nullable(); 


        $table->integer('organismeA')->nullable(); 
        $table->integer('organismeM')->nullable(); 
        $table->integer('organismeS')->nullable(); 


        $table->integer('sortieconfreeeA')->nullable(); 
        $table->integer('sortieconfreerM')->nullable(); 
        $table->integer('sortieconfrereS')->nullable(); 
        
        $table->integer('entrercongrereA')->nullable(); 
        $table->integer('entrercongrereM')->nullable(); 
        $table->integer('entrercongrereS')->nullable(); 
        $table->datetime('deleted_at')->nullable();
        $table->timestamps();
        //
    
    });
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
