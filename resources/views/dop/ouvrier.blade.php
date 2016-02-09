@extends('default')

@section('content')

    <style type="text/css">
        body{
            font-family: Arial;
        }
    </style>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead>
        <tr>
            {{--<th width="20%"><img src="{{ assert('img/suez.png') }}"></th>--}}
            <th width="20%">SUEZ</th>
            <th>
                FORMULAIRE DE DEMANDE D’OUVERTURE DE POSTE (DOP)
                Poste ouvrier (CDD & CDI) au sein d’une agence/ d’activité<br>
                Pôle : OSIS
            </th>
        </tr>
        </thead>
    </table>

    <br>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead></thead>

        <tbody>
        <tr>
            <td>
                <b><u><i>Demandeur : </i></u></b><br>
                Nom : {{ $document->nom }} Prenom :{{ $document->prenom }}<br>
                Direction : {{ $document->direction }}<br>
                Entité :{{ $document->entite }}<br>
                Date de début souhaité :{{ $document->date_debut_souhaite }}
            </td>
            <td>
                <b>Visa du demandeur</b><br>
                Date de la demande : {{ $document->date_demande }}<br>
                Signature :<br>

            </td>
        </tr>
        </tbody>
    </table>

    <br>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead></thead>

        <tbody>
        <tr>
            <td><b><u><i>Motif de la demande :</i></u></b></td>
        </tr>
        <tr>
            <td>
                Création de poste :{{ $document->creation_poste }}<br>
                Remplacement de : {{ $document->remplacement }}<br>
                Accroissement d’activité : {{ $document->accroissement_activite }}
            </td>
        </tr>
        <tr>
            <td>
                <b><u>Poste budgété sur 2015 : {{ $document->poste_budgete }}</u></b>
            </td>
        </tr>
        </tbody>
    </table>

    <br>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead></thead>

        <tbody>
        <tr>
            <td>
                <b><u><i>Intitulé du poste :</i></u></b> {{ $document->intitule_poste }}<br>
                <b><u><i>Site :</i></u></b> {{ $document->site }}<br>
                <b><u><i>Responsable hiérarchique :</i></u></b>{{ $document->responsable_hierarchique }}<br>
                <b><u><i>Contexte du poste :</i></u></b><br>
                {{ $document->contexte_poste }}
                <b><u><i>Principales missions  (descriptif à joindre en annexe) :</i></u></b><br>
                {{ $document->principale_mission }}

                <br>

                <b><u>Rémunération :</u></b><br>
                Salaire de base annuel :{{ $document->salaire_fixe }}<br>
                Variable (%) :{{ $document->salaire_variable }} – Précisez le % : {{ $document->pourcentage_salaire_variable }}<br>
                {{--<b><u>Autres avantages :</u></b>{{ $document->date_demande }}<br>--}}
            </td>
        </tr>
        </tbody>
    </table>

    <br>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead></thead>

        <tbody>
        <tr>
            <td>
                <b><u><i>Type de contrat :</i></u></b><br>
                {{ $document->type_contrat }}<br>
                CDD du  {{ $document->date_debut_cdd }} au {{ $document->date_fin_cdd }} <br><br>

                Durée du travail hebdomadaire : {{ $document->duree_travail_hebdomadaire }}<br>
            </td>
        </tr>
        </tbody>
    </table>

    <br>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead></thead>

        <tbody>
        <tr>
            <td>
                <b><u><i>A renseigner par le Responsable RH</i></u></b><br><br>

                La présente demande d’ouverture de poste peut-elle être pourvue par :	<br><br>

                - une réorganisation des tâches au sein du service ? {{ $document->reorganisation_tache }}n<br>
                - une mobilité interne ? {{ $document->mobilite_interne }}<br>
            </td>
        </tr>
        </tbody>
    </table>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead></thead>

        <tbody>
        <tr>
            <td style="height : 120px">
                Commentaires/Observations : <br>
                {{ $document->commentaire_rh }}
            </td>
            <td>
            Visa du responsable RH R/P<br>
            Nom : {{ $document->nom_rh_signature }}<br>
            Date : {{ $document->date_rh_signature }}<br>
            Signature :
        </td>
        </tr>
        </tbody>
    </table>

    <br>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead>
        <tr>
            <th>VISA DES SIGNATAIRES<br>Rayer le cas de figure inutiles</th>
        </tr>
        </thead>
    </table>

    <br>
    <span style="color: green"><b>Cas n°1 > REMPLACEMENT OU CREATION DE POSTE BUDGETE AU SEIN D’UNE AGENCE/D’ACTIVITES</span></b><br>
    <br>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead>
        <tr>
            <td width="50%">
                <b>Directeur d’agence/ d’activité<br>
                    (Membre du Cercle des Managers)</b>
            </td>
            <td width="50%">
                <b>RRH Pôle</b>
            </td>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>
                Nom : <br>
                Date : <br>
                Signature : <br>
            </td>
            <td>
                Nom : <br>
                Date : <br>
                Signature : <br>
            </td>
        </tr>
        </tbody>
    </table>

    <br>
    <span style="color: green"><b>Cas n° 2 > CREATION DE POSTE NON BUDGETE AU SEIN D’UNE AGENCE/D’ACTIVITES
</span></b><br>
    <br>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead>
        <tr>
            <td width="50%">
                <b>Directeur (Membre du COMEX Pôle)</b>
            </td>
            <td width="50%">
                <b>DRH Pôle</b>
            </td>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>
                Nom : <br>
                Date : <br>
                Signature : <br>
            </td>
            <td>
                Nom : <br>
                Date : <br>
                Signature : <br>
            </td>
        </tr>
        </tbody>
    </table>
    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead>
        <tr>
            <td width="50%">
                <b>Directeur Général Pôle</b>
            </td>
            <td width="50%">
                <b>Directeur Général Délégué Recyclage & valorisation France</b>
            </td>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>
                Nom : <br>
                Date : <br>
                Signature : <br>
            </td>
            <td>
                Nom : <br>
                Date : <br>
                Signature : <br>
            </td>
        </tr>
        </tbody>
    </table>

    <br>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead>
        </thead>

        <tbody>
        <tr>
            <td>
                <u><i><b>A renseigner par le Responsable RH</b></i></u><br><br>

                <b><u>Taleo :</u></b><br>
                Date de publication du poste : {{ $document->date_publication_taleo }}<br>
                Numéro de l’offre : {{ $document->numéro_offre }}
            </td>
        </tbody>
    </table>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead>
        </thead>

        <tbody>
        <tr>
            <td>
                <u><i><b>Annexes à joindre</b></i></u><br><br>

                Descriptif de poste {{ $document->descriptif_poste }}<br>
                Profil requis {{ $document->profil_requis }}
            </td>
        </tbody>
    </table>

@endsection