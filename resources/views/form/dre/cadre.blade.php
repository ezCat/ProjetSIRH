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
        </ul>

        <div id="tabs-1">
            {!! Form::label('', 'Intulé du poste : ') !!}
            {!! Form::text('nom', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Filière professionnelle : ') !!}
            {!! Form::text('entité', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Type de contrat : ') !!}
            {!! Form::select('type_contrat', ['CDI', 'CDD'], null ,['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Statut : ') !!}
            {!! Form::radio('poste_budgete', 'Cadre', null) !!} Cadre<br>
            {!! Form::radio('poste_budgete', 'ETAM', null) !!} Etam<br><br>

            {!! Form::label('', 'Date de démarrage : ') !!}
            {!! Form::date('direction_delegue', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('type_contrat', 'Type de contrat : ') !!}
            {!! Form::select('type_contrat', ['CDI', 'CDD'], null ,['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Nombre de poste à pourvoir : ') !!}
            {!! Form::date('date_debut_cdd', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Localisation : ') !!}
            {!! Form::date('date_fin_cdd', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Motif de recrutement : ') !!}<br>
            {!! Form::select('type_contrat', ['Remplacement', 'Création'], null ,['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Rémunération ') !!}<br><br>

            {!! Form::label('salaire_base', 'Fixe : ') !!}
            {!! Form::text('salaire_base', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('salaire_base', 'Nombre de mois : ') !!}
            {!! Form::text('salaire_base', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Variable : ') !!}
            {!! Form::text('pourcentage_salaire_variable', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Création de l\'annonce dans TALEO : ') !!}

            {!! Form::label('', 'Diffusion interne le : ') !!}
            {!! Form::date('date_debut_souhaite', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Diffusion externe le : ') !!}
            {!! Form::date('date_debut_souhaite', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'N° de référence TALEO : ') !!}
            {!! Form::date('date_demande', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Nombre de candidatures internes reçues (exclure les faux internes) : ') !!}
            {!! Form::date('date_demande', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Le poste a-t-il été présenté en comité de  ') !!}
            {!! Form::radio('poste_budgete', 1, null) !!} Oui<br>
            {!! Form::radio('poste_budgete', 0, null) !!} Non<br><br>


        </div>

        <div id="tabs-2">
            {!! Form::label('', 'CANDIDATS INTERNES NON RETENUES (JOINDRE LES CV)') !!}

            {!! Form::label('', 'Candidat 1 (nom et prénom) :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Société du groupe:') !!}
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

            {!! Form::label('', 'Société du groupe:') !!}
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

            {!! Form::label('', 'Société du groupe:') !!}
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



            {!! Form::label('', 'CANDIDATURE RETENUE (JOINDRE LE CV)') !!}

            {!! Form::label('', 'Candidat (nom et prénom) :') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Origine de la candidature:') !!}
            {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Motivation du choix du candidat externe (de manière détaillée) :') !!}
            {!! Form::textarea('nom_remplacement', null, ['class' => 'form-control']) !!}<br><br><br>
        </div>

    </div>

    <br><br><br>

    {!! Form::close() !!}

@endsection