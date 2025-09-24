<?php
    /****************
    ***** Index *****
    *****************
    Fonctionnalités :
    - Menu principal
    ****************/

    // Fonctions communes
    include_once('includes/functions/metier_commun.php');
    // include_once('includes/functions/physique_commun.php');

    // Contrôles communs
    // controlsIndex();

    // Modèle de données
    include_once('site/index/modele/metier_index.php');
    // include_once('portail/index/modele/controles_index.php');
    // include_once('portail/index/modele/physique_index.php');

    // Appels métier
    switch ($_GET['action'])
    {
        case 'goConsulter':
            // Récupération du menu
            $menu = getMenu(true);
            break;

        default:
            // Contrôle action renseignée URL
            header('location: /index.php?action=goConsulter');
            break;
    }

    // Traitements de sécurité avant la vue
    switch ($_GET['action'])
    {
        case 'goConsulter':
            foreach ($menu as &$lienMenu)
            {
                $lienMenu = Menu::secureData($lienMenu);
            }

            unset($lienMenu);
            break;

        default:
            break;
    }

    // Redirection affichage
    switch ($_GET['action'])
    {
        case 'goConsulter':
        default:
            include_once('site/index/vue/vue_index.php');
            break;
    }
?>