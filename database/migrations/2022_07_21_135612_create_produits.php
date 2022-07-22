<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image');
            $table->string('code_bare')->nullable();;
            $table->string('code_bare2')->nullable();;
            $table->string('laboratoire')->nullable();;
            $table->string('gamme')->nullable();;
            $table->unsignedBigInteger('types_id');

            // $table->integer('types_id')->unsigned();
            $table->foreign('types_id')->references('id')->on('types');

            $table->unsignedBigInteger('classes_id');
            $table->unsignedBigInteger('forms_id');
            $table->unsignedBigInteger('dcis_id');

            $table->unsignedBigInteger('inventaires_id');
            $table->foreign('inventaires_id')->references('id')->on('inventaires');

            // $table->integer('types_id')->unsigned();
            // $table->integer('classes_id')->unsigned();
            // $table->integer('forms_id')->unsigned();
            // $table->integer('dcis_id')->unsigned();
            $table->foreign('classes_id')->references('id')->on('classes');
            $table->foreign('forms_id')->references('id')->on('forms');
            $table->foreign('dcis_id')->references('id')->on('dcis');

            // $table->foreignId('forms_id')
            //       ->constrained('forms');
            // $table->foreignId('dcis_id')
            //       ->constrained('dcis');
            // $table->foreignId('classes_id')
            //       ->constrained('classes');    
            $table->string('sous_gamme')->nullable();;
            $table->string('produit_tableau')->nullable();;
            $table->string('prescription')->nullable();;
            $table->string('produit_marche')->nullable();;
            $table->string('PPH');
            $table->string('PPV');
            $table->string('TVA');
            $table->string('TVA_vente');
            $table->string('remboursable')->nullable();;
            $table->string('présentation')->nullable();;
            $table->string('excipient')->nullable();;
            $table->string('posologie_adult')->nullable();;
            $table->string('posologie_enfant')->nullable();;
            $table->string('indications')->nullable();;
            $table->string('contre_indication_conduit')->nullable();;
            $table->string('contre_indication_monograph')->nullable();;
            $table->string('contre_indication_grossesse')->nullable();;
            $table->string('reference_labo_produit')->nullable();;
            $table->string('description')->nullable();;
            $table->string('conditionnement')->nullable();;
            $table->string('monograph');
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
        Schema::dropIfExists('produits');
    }
}
