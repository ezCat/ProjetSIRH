@extends('home')

@section('content')

    <h1>Demande d'ouverture de poste : Ouvrier</h1>
    <br>

    {!! Form::open(['url' => route('dop.store')]) !!}

    {!! Form::label('nom', 'Nom : ') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}<br>

    {!! Form::label('prenom', 'Prénom : ') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control']) !!}<br>

    {!! Form::label('direction', 'Direction : ') !!}
    {!! Form::text('direction', null, ['class' => 'form-control']) !!}<br>

    {!! Form::label('date_debut_souhaite', 'Date de début souhaitée : ') !!}
    {!! Form::text('date_debut_souhaite', null, ['class' => 'form-control']) !!}<br>

    {!! Form::label('date_demande', 'Date de la demande : ') !!}
    {!! Form::date('date_demande', null, ['class' => 'form-control']) !!}<br>

    {!! Form::checkbox('creation_de_poste', null, ['class' => 'form-control']) !!} Création de poste<br><br>

    {!! Form::checkbox('remplacement', null, ['class' => 'form-control']) !!} Remplacement<br><br>

    {!! Form::label('nom_remplacement', 'Nom remplaçant :') !!}
    {!! Form::text('nom_remplacement', null, ['class' => 'form-control']) !!}<br>

    {!! Form::checkbox('accroissement_activite', null, ['class' => 'form-control']) !!} Accroissement d'activité<br><br>

    {!! Form::label('raison_activite', 'Raison de l\'activité : ') !!}
    {!! Form::text('raison_activite', null, ['class' => 'form-control']) !!}<br>

    {!! Form::label('poste_budgete', 'Poste budgété sur 2016 : ') !!}<br>
    {!! Form::radio('poste_budgete', 1, null) !!} Oui<br>
    {!! Form::radio('poste_budgete', 0, null) !!} Non<br><br>

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

    {!! Form::label('', 'Pourcentage variable (Si oui) : ') !!}
    {!! Form::text('pourcentage_salaire_variable', null, ['class' => 'form-control']) !!}<br>

    {!! Form::label('type_contrat', 'Type de contrat : ') !!}
    {!! Form::select('type_contrat', ['CDI', 'CDD'], null ,['class' => 'form-control']) !!}<br>

    {!! Form::label('', 'Date de début (CDD) : ') !!}
    {!! Form::date('date_debut_cdd', null, ['class' => 'form-control']) !!}<br>

    {!! Form::label('', 'Date de fin (CDD) : ') !!}
    {!! Form::date('date_fin_cdd', null, ['class' => 'form-control']) !!}<br>

    {!! Form::label('duree_travail_hebdomadaire', 'Durée de travail hebdomadaire : ') !!}
    {!! Form::text('duree_travail_hebdomadaire', null, ['class' => 'form-control']) !!}<br>

    {!! Form::label('reorganisation_tache', 'Réorganisation des taches : ') !!}
    {!! Form::text('reorganisation_tache', null, ['class' => 'form-control']) !!}<br>

    {!! Form::label('mobilite_interne', 'Mobilité interne : ') !!}
    {!! Form::text('mobilite_interne', null, ['class' => 'form-control']) !!}<br>

    {!! Form::label('commentaire_rh', 'Commentaires/Observations : ') !!}
    {!! Form::text('commentaire_rh', null, ['class' => 'form-control']) !!}<br>

    {!! Form::label('nom_rh_signature', 'Nom : ') !!}
    {!! Form::text('nom_rh_signature', null, ['class' => 'form-control']) !!}<br>

    {!! Form::label('date_rh_signature', 'Date : ') !!}
    {!! Form::text('date_rh_signature', null, ['class' => 'form-control']) !!}<br>

    {!! Form::label('cas_dop', 'Cas à choisir : ') !!}
    {!! Form::text('cas_dop', null, ['class' => 'form-control']) !!}<br>

    {!! Form::label('date_publication_taleo', 'Date de publication TALEO : ') !!}
    {!! Form::date('date_publication_taleo', null, ['class' => 'form-control']) !!}<br>

    {!! Form::label('numéro_offre', 'Numéro de l\'offre : ') !!}
    {!! Form::text('numéro_offre', null, ['class' => 'form-control']) !!}<br>

    {!! Form::label('descriptif_poste', 'Description du poste : ') !!}
    {!! Form::text('descriptif_poste', null, ['class' => 'form-control']) !!}<br>

    {!! Form::label('profil_requis', 'Profil requis : ') !!}
    {!! Form::text('profil_requis', null, ['class' => 'form-control']) !!}<br>

    {!! Form::close() !!}

@endsection