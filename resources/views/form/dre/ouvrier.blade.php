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

    <h1>DRE : Candidat ouvrier en CDI & CDD</h1>
    <br>

    {!! Form::open(['url' => route('dop.store')]) !!}

    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Poste</a></li>
            <li><a href="#tabs-2">Poste et candidats</a></li>
            <li><a href="#tabs-3">Poste</a></li>
            <li><a href="#tabs-4">Poste et candidats</a></li>
            <li><a href="#tabs-5">Poste</a></li>
            <li><a href="#tabs-6">Poste et candidats</a></li>
        </ul>

        <div id="tabs-1">
            {!! Form::label('', 'Intitulé du poste : ') !!}
            {!! Form::text('nom', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Nombre de poste à pourvoir : ') !!}
            {!! Form::text('prenom', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Filière professionnelle : ') !!}
            {!! Form::text('entité', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Localisation : ') !!}
            {!! Form::text('direction_delegue', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Création de l\'annonce dans TALEO : ') !!}
            {!! Form::text('direction_service', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Diffusion interne le : ') !!}
            {!! Form::date('date_debut_souhaite', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Diffusion externe le : ') !!}
            {!! Form::date('date_debut_souhaite', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'N° de référence TALEO : ') !!}
            {!! Form::date('date_demande', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Statut : ') !!}
            {!! Form::date('date_demande', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Rémunération : ') !!}
            {!! Form::date('date_demande', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Variable : ') !!}
            {!! Form::date('date_demande', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Nombre de candidatures internes reçues : ') !!}
            {!! Form::date('date_demande', null, ['class' => 'form-control']) !!}<br>

        </div>
        <div id="tabs-2">
            {!! Form::label('type_contrat', 'Type de contrat : ') !!}
            {!! Form::select('type_contrat', ['CDI', 'CDD'], null ,['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Date de début (CDD) : ') !!}
            {!! Form::date('date_debut_cdd', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Date de fin (CDD) : ') !!}
            {!! Form::date('date_fin_cdd', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('duree_travail_hebdomadaire', 'Durée de travail hebdomadaire : ') !!}
            {!! Form::text('duree_travail_hebdomadaire', null, ['class' => 'form-control']) !!}<br>

        </div>
        <div id="tabs-3">
            {!! Form::checkbox('creation_de_poste', 1, null) !!} Création de poste<br><br>

            {!! Form::checkbox('remplacement', 1, null) !!} Remplacement<br><br>

            {!! Form::label('', 'Nom remplaçant :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Date de départ :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Motif du départ :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::checkbox('accroissement_activite', 1, null) !!} Accroissement d'activité<br><br>
            {!! Form::label('', 'Précisez :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::checkbox('requalification_ett', 1, null) !!} Requalification ETT<br><br>
            {!! Form::label('', 'Date de la mission de la mission d\'intérim :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::checkbox('remplacement', 1, null) !!} Gain de marché<br><br>

            {!! Form::label('', 'Poste budgété sur 2016 : ') !!}<br>
            {!! Form::radio('poste_budgete', 1, null) !!} Oui<br>
            {!! Form::radio('poste_budgete', 0, null) !!} Non<br><br>
        </div>
        <div id="tabs-4">
            {!! Form::label('', 'Contrat / Chantier') !!}

            {!! Form::label('', 'Nom du client / chantier :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Date de démarrage et durée :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'CA :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}K€<br>

            {!! Form::label('', 'Salariés affectés au contrat/chantier') !!}

            {!! Form::label('', 'Nombre de collaborateurs CDI :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}ETP<br>

            {!! Form::label('', 'Nombre de collaborateurs CDD :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}ETP<br>

            {!! Form::label('', 'Cout MS chargée :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}K€<br>

            {!! Form::label('', 'Nom et prénom des salariés :') !!}
            {!! Form::textarea('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Intérimaires affectés au contrat/chantier') !!}

            {!! Form::label('', 'Nombre d\'intérimaires :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}ETP<br>

            {!! Form::label('', 'Cout de l\'intérim :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}K€<br>

            {!! Form::label('', 'Nom et prénom des intérimaires :') !!}
            {!! Form::textarea('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Contexte du poste (Description précises et détaillés, spécificités du poste nécessitant le recrutement d\'un candidat externe) :') !!}
            {!! Form::textarea('nom_remplacement', null, ['class' => 'form-control']) !!}<br>
        </div>
        <div id="tabs-5">
            {!! Form::label('', 'CANDIDATS INTERNES NON RETENUES (JOINDRE LES CV)') !!}

            {!! Form::label('', 'Candidat 1 (nom et prénom) :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Origine de la candidature :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Candidat contacté par téléphone :') !!}
            {!! Form::radio('poste_budgete', 1, null) !!} Oui<br>
            {!! Form::radio('poste_budgete', 0, null) !!} Non<br><br>

            {!! Form::label('', 'Candidat reçu en entretien :') !!}
            {!! Form::radio('poste_budgete', 1, null) !!} Oui<br>
            {!! Form::radio('poste_budgete', 0, null) !!} Non<br><br>

            {!! Form::label('', 'Le candidat a-t-il eu connaissance des motifs de refus ?') !!}
            {!! Form::radio('poste_budgete', 1, null) !!} Oui<br>
            {!! Form::radio('poste_budgete', 0, null) !!} Non<br><br>

            {!! Form::label('', 'Motivation de refus de la candidature interne (de manière détaillée) :') !!}
            {!! Form::textarea('nom_remplacement', null, ['class' => 'form-control']) !!}<br><br><br>



            {!! Form::label('', 'Candidat 2 (nom et prénom) :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Origine de la candidature :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Candidat contacté par téléphone :') !!}
            {!! Form::radio('poste_budgete', 1, null) !!} Oui<br>
            {!! Form::radio('poste_budgete', 0, null) !!} Non<br><br>

            {!! Form::label('', 'Candidat reçu en entretien :') !!}
            {!! Form::radio('poste_budgete', 1, null) !!} Oui<br>
            {!! Form::radio('poste_budgete', 0, null) !!} Non<br><br>

            {!! Form::label('', 'Le candidat a-t-il eu connaissance des motifs de refus ?') !!}
            {!! Form::radio('poste_budgete', 1, null) !!} Oui<br>
            {!! Form::radio('poste_budgete', 0, null) !!} Non<br><br>

            {!! Form::label('', 'Motivation de refus de la candidature interne (de manière détaillée) :') !!}
            {!! Form::textarea('nom_remplacement', null, ['class' => 'form-control']) !!}<br><br><br>



            {!! Form::label('', 'Candidat 3 (nom et prénom) :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Origine de la candidature :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Candidat contacté par téléphone :') !!}
            {!! Form::radio('poste_budgete', 1, null) !!} Oui<br>
            {!! Form::radio('poste_budgete', 0, null) !!} Non<br><br>

            {!! Form::label('', 'Candidat reçu en entretien :') !!}
            {!! Form::radio('poste_budgete', 1, null) !!} Oui<br>
            {!! Form::radio('poste_budgete', 0, null) !!} Non<br><br>

            {!! Form::label('', 'Le candidat a-t-il eu connaissance des motifs de refus ?') !!}
            {!! Form::radio('poste_budgete', 1, null) !!} Oui<br>
            {!! Form::radio('poste_budgete', 0, null) !!} Non<br><br>

            {!! Form::label('', 'Motivation de refus de la candidature interne (de manière détaillée) :') !!}
            {!! Form::textarea('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

        </div>
        <div id="tabs-6">
            {!! Form::label('', 'CANDIDATURE RETENUE (JOINDRE LE CV)') !!}

            {!! Form::label('', 'Candidat 1 (nom et prénom) :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Origine de la candidature :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Motivation du choix de candidat externe (de manière détaillée) :') !!}
            {!! Form::textarea('nom_remplacement', null, ['class' => 'form-control']) !!}<br><br><br>



            {!! Form::label('', 'Candidat 2 (nom et prénom) :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Origine de la candidature :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Motivation du choix de candidat externe (de manière détaillée) :') !!}
            {!! Form::textarea('nom_remplacement', null, ['class' => 'form-control']) !!}<br><br><br>



            {!! Form::label('', 'Candidat 3 (nom et prénom) :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Origine de la candidature :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Motivation du choix de candidat externe (de manière détaillée) :') !!}
            {!! Form::textarea('nom_remplacement', null, ['class' => 'form-control']) !!}<br><br><br>s
        </div>
    </div>

    <br><br><br>

    {!! Form::close() !!}

@endsection