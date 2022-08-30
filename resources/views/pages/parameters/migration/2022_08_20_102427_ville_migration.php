<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VilleMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('Villes', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('Nom');
        //     $table->unsignedBigInteger('pays_id');

        //     $table->foreign('pays_id')->references('id')->on('pays');


        //     $table->datetime('deleted_at')->nullable();
        //     $table->timestamps();
        // });
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
