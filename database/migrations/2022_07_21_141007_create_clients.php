<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('cnn');
            $table->string('cns');
            $table->string('email');
            $table->string('type');
            $table->string('game');
            // $table->foreignId('types_id')
            //       ->constrained('types');
            // $table->foreignId('forms_id')
            //       ->constrained('forms');
            // $table->foreignId('dci_id')
            //       ->constrained('dcis');
            // $table->foreignId('classe_id')
            //       ->constrained('classes');    
            $table->string('tele');
            $table->string('ville');
            $table->string('adresse');
            $table->string('code_postale');
            $table->string('plafan_credit');
            $table->string('organisme')->nullable();;
            $table->string('num_immatriculation')->nullable();;
            $table->string('num_affiliation')->nullable();;
            $table->string('pays');
            // $table->string('excipient');
            // $table->string('posologie_adult');
            // $table->string('posologie_enfat');
            // $table->string('indications');
            // $table->string('contre_indication_conduit');
            // $table->string('contre_indication_monograph');
            // $table->string('contre_indication_grossesse');
            // $table->string('reference_labo_produit');
            // $table->string('description');
            // $table->string('conditionnement');
            // $table->string('monograph');
            $table->string('description')->nullable();;

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
        Schema::dropIfExists('clients');
    }
}
