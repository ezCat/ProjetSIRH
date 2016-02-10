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
            <li><a href="#tabs-1">Informations générales</a></li>
            <li><a href="#tabs-2">Poste et processus de recrutement</a></li>
            <li><a href="#tabs-3">Poste</a></li>
        </ul>

        <div id="tabs-1">
            {!! Form::label('', 'Entité : ') !!}
            {!! Form::text('nom', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Recruteur (nom, prénom) : ') !!}
            {!! Form::text('prenom', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Candidat (nom, prénom) : ') !!}
            {!! Form::text('entité', null, ['class' => 'form-control']) !!}<br>
        </div>

        <div id="tabs-2">
            {!! Form::label('', 'Intulé du poste : ') !!}
            {!! Form::text('nom', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Filière professionnelle : ') !!}
            {!! Form::text('entité', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Localisation : ') !!}
            {!! Form::text('direction_delegue', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Date de démarrage : ') !!}
            {!! Form::date('direction_delegue', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Statut : ') !!}
            {!! Form::radio('poste_budgete', 'Cadre', null) !!} Cadre<br>
            {!! Form::radio('poste_budgete', 'ETAM', null) !!} Etam<br><br>

            {!! Form::label('type_contrat', 'Type de contrat : ') !!}
            {!! Form::select('type_contrat', ['CDI', 'CDD'], null ,['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Date de début (CDD) : ') !!}
            {!! Form::date('date_debut_cdd', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Date de fin (CDD) : ') !!}
            {!! Form::date('date_fin_cdd', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Rémunération ') !!}<br><br>

            {!! Form::label('salaire_base', 'Fixe : ') !!}
            {!! Form::text('salaire_base', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('salaire_base', 'Nombre de mois : ') !!}
            {!! Form::text('salaire_base', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Variable : ') !!}
            {!! Form::text('pourcentage_salaire_variable', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Création de l\'annonce dans TALEO : ') !!}
            {!! Form::text('direction_service', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Diffusion interne le : ') !!}
            {!! Form::date('date_debut_souhaite', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'Diffusion externe le : ') !!}
            {!! Form::date('date_debut_souhaite', null, ['class' => 'form-control']) !!}<br>

            {!! Form::label('', 'N° de référence TALEO : ') !!}
            {!! Form::date('date_demande', null, ['class' => 'form-control']) !!}<br>
        </div>

        <div id="tabs-3">
            {!! Form::label('', 'L\'embauche fait-elle suite à un premier contrat au sein du Groupe ? ') !!}
            {!! Form::radio('poste_budgete', 1, null) !!} Oui<br>
            {!! Form::radio('poste_budgete', 0, null) !!} Non<br><br>

            {!! Form::label('', 'Si oui, lequel ? ') !!}<br>
            {!! Form::radio('poste_budgete', 1, null) !!} Stage<br>
            {!! Form::radio('poste_budgete', 0, null) !!} Alternance<br>
            {!! Form::radio('poste_budgete', 1, null) !!} CDD / intérim<br>
            {!! Form::radio('poste_budgete', 0, null) !!} VIE<br>
            {!! Form::radio('poste_budgete', 1, null) !!} Graduate Program<br>
        </div>

    </div>

    <br><br><br>

    {!! Form::close() !!}

@endsection