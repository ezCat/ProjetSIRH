<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDOPTest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dop_test', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('direction');
            $table->string('entité');
            $table->string('date_debut_souhaite');
            $table->date('date_demande');
            $table->string('signature_demandeur');
            $table->boolean('creation_de_post');
            $table->boolean('remplacement');
            $table->string('nom_remplacement');
            $table->boolean('accroissement_activite');
            $table->string('raison_activite');
            $table->boolean('poste_budgete');
            $table->string('intitule_poste');
            $table->string('site');
            $table->string('responsable_hierarchique');
            $table->string('contexte_poste');
            $table->string('principale_mission');
            $table->integer('salaire_base');
            $table->integer('salaire_variable');
            $table->integer('pourcentage_salaire_variable');
            $table->string('type_contrat');
            $table->date('date_debut_cdd');
            $table->date('date_fin_cdd');
            $table->string('duree_travail_hebdomadaire');
            $table->boolean('reorganisation_tache');
            $table->boolean('mobilite_interne');
            $table->string('commentaire_rh');
            $table->string('nom_rh_signature');
            $table->date('date_rh_signature');
            $table->string('rh_signature');
            $table->string('cas_dop');
            $table->date('date_publication_taleo');
            $table->string('numéro_offre');
            $table->boolean('descriptif_poste');
            $table->boolean('profil_requis');
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
