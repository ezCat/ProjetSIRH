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
                <b><u><i>Demandeur :</i></u></b><br>
                Nom : Prenom :<br>
                Direction :<br>
                Entité :<br>
                Date de début souhaité :
            </td>
            <td>
                <b>Visa du demandeur</b><br>
                Date de la demande<br>
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
                Création de poste :      Oui       Non<br>
                Remplacement de : ………………………………………………………………<br>
                Accroissement d’activité : ………………………………………………………
            </td>
        </tr>
        <tr>
            <td>
                <b><u>Poste budgété sur 2015 :  Oui       Non</u></b>
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
                <b><u><i>Intitulé du poste :</i></u></b> ..........................................................……………………………………………………………….<br>
                <b><u><i>Site :</i></u></b> …………………………………………………………………………………………………………………………..<br>
                <b><u><i>Responsable hiérarchique :</i></u></b> ……………………………………………………………………………………………...<br>
                <b><u><i>Contexte du poste :</i></u></b><br>
                -<br>
                -<br>
                -<br>
                -<br>
                <b><u><i>Principales missions  (descriptif à joindre en annexe) :</i></u></b><br>
                - <br>
                -<br>
                -<br>
                -<br>
                -<br>
                -<br>

                <br>

                <b><u>Rémunération :</u></b><br>
                Salaire de base annuel :…………………………………..……………………………………………………………………........<br>
                Variable (%) : 	  Non      	 Oui – Précisez le % : …………………………………………………………<br>
                <b><u>Autres avantages :</u></b>………………………………………………………………………………………………………….<br>
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
                CDI<br>
                CDD  	                 du  …………………………….  au …………………………………<br><br>

                Durée du travail hebdomadaire……………………………………………………………………………………….<br>
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

                - une réorganisation des tâches au sein du service ?     Oui   Non<br>
                - une mobilité interne ?                                                       Oui   Non<br>
            </td>
        </tr>
        </tbody>
    </table>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead></thead>

        <tbody>
        <tr>
            <td style="height : 120px">
                Commentaires/Observations :
            </td>
            <td>
                Visa du responsable RH R/P<br>
                Nom :<br>
                Date :<br>
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
    <span style="color: green"><b>Cas n°1 > REMPLACEMENT OU CREATION DE POSTE BUDGETE AU SEIN D’UNE AGENCE/D’ACTIVITES
</span></b><br>
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
                Date de publication du poste : ……………………………………………………………………………………………..<br>
                Numéro de l’offre : …………………………………………………………………………………………………………..
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

                Descriptif de poste - Profil requis
            </td>
        </tbody>
    </table>

@endsection