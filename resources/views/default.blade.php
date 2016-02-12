<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.png') }}">

    <title>Plateforme SI-RH</title>

    <link rel="stylesheet" href="{{ asset('css/accueil.css') }}">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/start/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<body>


<div class="container" style="background-image: url({{ asset('images/fond_pointille.png') }}) ;">
    <div id="sous_container">
        <div id="utilisateur">projet rh</div>
        <div id="bandeau_vert_utilisateur"></div>
        <div id="bandeau_vert">
            <div id="nouveau_dossier">
                Nouveau dossier
            </div>
            <div id="recherche">
                Recherche...
            </div>
            <div class="clear"></div>
        </div>
        <div id="dossiers">
            <div class="dossier">
                <div class="lib_dossier">Dossier n°123</div>
                <div class="emploi_dossier">
                    Assistante d'exploitation
                </div>
                <div class="zone_dossier">Proximité Nord-Est | <span style="color:#CCC;">Saninord assainissement</span></div>
                <!-- <div class="clear"></div> -->
                <div class="infos_dossier">
                    Ajouté le 12/02/2016
                </div>
                <!-- div class="supprimer_dossier">
                    Supprimer le dossier
                </div> -->
                <div class="clear"></div>
                <div class="phase">
                    <div class="titre_phase">DOP</div>
                    <!-- <div class="phase_pourcentage">
                        <div class="phase_pourcentage_texte">
                            33%
                        </div>
                        <div class="phase_pourcentage_barre">
                            <div class="phase_pourcentage_barre"></div>    
                        </div>
                    </div> -->
                    <div class="tab_phase">
                        <div class="tab_phase_haut">Numéro</div>
                        <div class="tab_phase_haut">Etat</div>
                        <div class="tab_phase_haut">Date demande</div>
                        <div class="clear"></div>
                        <div class="tab_phase_bas">123</div>
                        <div class="tab_phase_bas orange">En cours</div>
                        <div class="tab_phase_bas">12/02/2016</div>
                        <div class="clear"></div>
                    </div>
                    <div class="champ_phase">Modifier</div>
                    <div class="champ_phase">Exporter</div>
                    <div class="champ_phase">Imprimer</div>
                    <div class="champ_phase">Supprimer</div>
                    <div class="clear"></div>
                </div>
                <!-- <div class="phase">
                    <div class="titre_phase">DRE</div>
                    
                    <div class="tab_phase">
                        <div class="tab_phase_haut">Numéro</div>
                        <div class="tab_phase_haut">Etat</div>
                        <div class="tab_phase_haut">Date demande</div>
                        <div class="clear"></div>
                        <div class="tab_phase_bas">123</div>
                        <div class="tab_phase_bas orange">En cours</div>
                        <div class="tab_phase_bas">12/02/2016</div>
                        <div class="clear"></div>
                    </div>
                    <div class="champ_phase">Modifier</div>
                    <div class="champ_phase">Exporter</div>
                    <div class="champ_phase">Imprimer</div>
                    <div class="champ_phase">Supprimer</div>
                    <div class="clear"></div>
                </div> -->
                
            </div>
            
        
            <div class="dossier">
                <div class="lib_dossier">Dossier n°122</div>
                <div class="emploi_dossier">
                    Assistant P2S
                </div>
                <div class="zone_dossier">Siège | <span style="color:#CCC;">SITA AMI</span></div>
                <!-- <div class="clear"></div> -->
                <div class="infos_dossier">
                    Ajouté le 11/02/2016
                </div>
                <!-- div class="supprimer_dossier">
                    Supprimer le dossier
                </div> -->
                <div class="clear"></div>
                <div class="phase">
                    <div class="titre_phase">DOP</div>
                    <!-- <div class="phase_pourcentage">
                        <div class="phase_pourcentage_texte">
                            33%
                        </div>
                        <div class="phase_pourcentage_barre">
                            <div class="phase_pourcentage_barre"></div>    
                        </div>
                    </div> -->
                    <div class="tab_phase">
                        <div class="tab_phase_haut">Numéro</div>
                        <div class="tab_phase_haut">Etat</div>
                        <div class="tab_phase_haut">Date demande</div>
                        <div class="clear"></div>
                        <div class="tab_phase_bas">122</div>
                        <div class="tab_phase_bas vert">Validé</div>
                        <div class="tab_phase_bas">11/02/2016</div>
                        <div class="clear"></div>
                    </div>
                    <!-- <div class="champ_phase">Modifier</div> -->
                    <div class="champ_phase">Exporter</div>
                    <div class="champ_phase">Imprimer</div>
                    <!-- <div class="champ_phase">Supprimer</div> -->
                    <div class="clear"></div>
                </div>
                <div class="phase">
                    <div class="titre_phase">DRE</div>
                    <!-- <div class="phase_pourcentage">
                        <div class="phase_pourcentage_texte">
                            33%
                        </div>
                        <div class="phase_pourcentage_barre">
                            <div class="phase_pourcentage_barre"></div>    
                        </div>
                    </div> -->
                    <div class="tab_phase">
                        <div class="tab_phase_haut">Numéro</div>
                        <div class="tab_phase_haut">Etat</div>
                        <div class="tab_phase_haut">Date demande</div>
                        <div class="clear"></div>
                        <div class="tab_phase_bas">122</div>
                        <div class="tab_phase_bas orange">En cours</div>
                        <div class="tab_phase_bas">12/02/2016</div>
                        <div class="clear"></div>
                    </div>
                    <div class="champ_phase">Modifier</div>
                    <div class="champ_phase">Exporter</div>
                    <div class="champ_phase">Imprimer</div>
                    <div class="champ_phase">Supprimer</div>
                    <div class="clear"></div>
                </div>
                
            </div>
            
        </div>
    </div>
    <div class="clear"></div>
    <div id="bande_bas"></div>
    <div id="bande_gauche_footer"></div>
    <div id="logo_suez">
        <img src="{{ asset('images/logo_suez.png') }}" />
    </div>
    <div class="clear"></div>

</div>

<script type="text/javascript">
    $(function() {
        $( "#tabs" ).tabs();
    });
</script>
