<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDossier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossier', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero');
            $table->string('libelle');
            $table->integer('id_type_dossier');
            $table->integer('id_demandeur');
            $table->string('id_etat');
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
        //
    }
}
