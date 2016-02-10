@extends('default')

<head>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/start/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(function() {
            $( "#tabs" ).tabs();
        });
    </script>
</head>

@section('content')

    <h1>Demande d'ouverture de poste : Cadre au sein d'une agence (hors Cercle des Managers)</h1>
    <br>

    {!! Form::open(['route' => 'home', 'method' => 'get']) !!}

    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Demandeur</a></li>
            <li><a href="#tabs-2">Motif</a></li>
            <li><a href="#tabs-3">Descriptif du poste</a></li>
            <li><a href="#tabs-4">Type du contrat</a></li>
            <li><a href="#tabs-5">Partie RRH</a></li>
            <li><a href="#tabs-6">VISA des signataires</a></li>
            <li><a href="#tabs-7">TALEO</a></li>
            <li><a href="#tabs-8">Annexes</a></li>
        </ul>

        <div id="tabs-1">
            {!! Form::label('nom', 'Nom : ') !!}
            {!! Form::text('nom', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('prenom', 'Prénom : ') !!}
            {!! Form::text('prenom', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('entité', 'Entité : ') !!}
            {!! Form::text('entité', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('direction', 'Direction Déléguée: ') !!}
            {!! Form::text('direction_delegue', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('direction', 'Direction/Service: ') !!}
            {!! Form::text('direction_service', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('date_debut_souhaite', 'Date de début souhaitée : ') !!}
            {!! Form::date('date_debut_souhaite', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('date_demande', 'Date de la demande : ') !!}
            {!! Form::date('date_demande', null, ['class' => 'form-control']) !!}<br>
        </div>
        <div id="tabs-2">
            {!! Form::checkbox('creation_de_poste', 1, null) !!} Création de poste<br><br>

            {!! Form::checkbox('remplacement', 1, null) !!} Remplacement<br><br>

            {!! Form::label('nom_remplacement', 'Nom remplaçant :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::checkbox('accroissement_activite', 1, null) !!} Accroissement d'activité<br><br>

            {!! Form::label('raison_activite', 'Raison de l\'activité : ') !!}
            {!! Form::text('raison_activite', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('poste_budgete', 'Poste budgété sur 2016 : ') !!}<br>
            {!! Form::radio('poste_budgete', 1, null) !!} Oui<br>
            {!! Form::radio('poste_budgete', 0, null) !!} Non<br><br>
        </div>
        <div id="tabs-3">
            {!! Form::label('intitule_poste', 'Intitulé du poste : ') !!}
            {!! Form::text('intitule_poste', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('site', 'Site : ') !!}
            {!! Form::text('site', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('responsable_hierarchique', 'Responsable hiérarchique : ') !!}
            {!! Form::text('responsable_hierarchique', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('contexte_poste', 'Contexte du poste : ') !!}
            {!! Form::textarea('contexte_poste', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('principale_mission', 'Missions principales : ') !!}
            {!! Form::textarea('principale_mission', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Rémunération : ') !!}<br><br>

            {!! Form::label('salaire_base', 'Salaire de base : ') !!}
            {!! Form::text('salaire_base', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('salaire_variable', 'Salaire variable : ') !!}<br>
            {!! Form::radio('salaire_variable', 1, null) !!} Oui<br>
            {!! Form::radio('salaire_variable', 0, null) !!} Non<br><br>

            {!! Form::label('', 'Salaire variable : ') !!}<br>
            {!! Form::radio('voiture', 'service', null) !!} Service<br>
            {!! Form::radio('voiture', 'fonction', null) !!} Fonction<br><br>

            {!! Form::label('', 'Pourcentage variable (Si oui) : ') !!}
            {!! Form::text('pourcentage_salaire_variable', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Autres avantages : ') !!}
            {!! Form::text('autre_avantage', null, ['class' => 'form-control']) !!}<br>
        </div>
        <div id="tabs-4">
            {!! Form::label('type_contrat', 'Type de contrat : ') !!}
            {!! Form::select('type_contrat', ['CDI', 'CDD'], null ,['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Date de début (CDD) : ') !!}
            {!! Form::date('date_debut_cdd', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Date de fin (CDD) : ') !!}
            {!! Form::date('date_fin_cdd', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('duree_travail_hebdomadaire', 'Durée de travail hebdomadaire : ') !!}
            {!! Form::text('duree_travail_hebdomadaire', null, ['class' => 'form-control']) !!}<br>
        </div>
        <div id="tabs-5">
            {!! Form::label('', 'A renseigner par le Responsable RH ') !!}<br><br>

            La présente demande d’ouverture de poste peut-elle être pourvue par :<br><br>

            {!! Form::checkbox('reorganisation_tache', 1, null) !!} Réorganisation des taches au sein du service <br>
            {!! Form::checkbox('mobilite_interne', 1, null) !!} Mobilité interne <br><br>

            {!! Form::label('commentaire_rh', 'Commentaires/Observations : ') !!}
            {!! Form::textarea('commentaire_rh', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Informations sur le RRH : ') !!}<br>
            {!! Form::label('nom_rh_signature', 'Nom : ') !!}
            {!! Form::text('nom_rh_signature', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('date_rh_signature', 'Date : ') !!}
            {!! Form::text('date_rh_signature', null, ['class' => 'form-control']) !!}<br><br><br>
        </div>
        <div id="tabs-6">
            {!! Form::label('cas_dop', 'VISA des signataires, cas à choisir : ') !!}
            {!! Form::select('cas_dop', array('Cas n°1 > REMPLACEMENT OU CREATION DE POSTE BUDGETE AU SEIN D’UNE AGENCE/D’ACTIVITES',
            'Cas n°2 > CREATION DE POSTE NON BUDGETE AU SEIN D’UNE AGENCE/D’ACTIVITES'), null, ['class' => 'form-control']) !!}<br>
        </div>
        <div id="tabs-7">
            {!! Form::label('date_publication_taleo', 'Date de publication TALEO : ') !!}
            {!! Form::date('date_publication_taleo', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('numéro_offre', 'Numéro de l\'offre : ') !!}
            {!! Form::text('numéro_offre', null, ['class' => 'form-control']) !!}<br>
        </div>
        <div id="tabs-8">
            {!! Form::checkbox('descriptif_poste', 1, null) !!} Descriptif de poste<br>
            {!! Form::checkbox('profil_requis', 1, null) !!} Profil requis<br>
            {!! Form::submit('Soumettre', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

    <br><br><br>

    {!! Form::close() !!}

@endsection