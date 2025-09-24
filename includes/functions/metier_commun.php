<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/classes/menu.php');

    // METIER : Récupération de la plateforme
    // RETOUR : Plateforme
    function getPlateforme()
    {
        // Initialisations
        $plateforme = 'web';

        // Récupération des données
        $userAgent = $_SERVER['HTTP_USER_AGENT'];

        // Recherche si plateforme mobile
        if (preg_match('/iphone/i', $userAgent)
        OR  preg_match('/android/i', $userAgent)
        OR  preg_match('/blackberry/i', $userAgent)
        OR  preg_match('/symb/i', $userAgent)
        OR  preg_match('/ipad/i', $userAgent)
        OR  preg_match('/ipod/i', $userAgent)
        OR  preg_match('/phone/i', $userAgent))
            $plateforme = 'mobile';

        // Retour
        return $plateforme;
    }

    // METIER : Récupération liens menu
    // RETOUR : Menu
    function getMenu($isIndex)
    {
        // Lien site
        if (!$isIndex)
        {
            $color = '_green';

            $accueil = new Menu();        
            $accueil->setTitle('Accueil');
            $accueil->setLink('/index.php?action=goConsulter');
            $accueil->setPicture('/includes/icons/common/recipes' . $color . '.png');
            $accueil->setAlt('recipes' . $color);
        }
        else
            $color = '';
        
        // Lien recettes
        $recettes = new Menu();        
        $recettes->setTitle('Recettes');
        $recettes->setLink('/site/recettes/recettes.php?action=goConsulter');
        $recettes->setPicture('/includes/icons/common/recipes' . $color . '.png');
        $recettes->setAlt('recipes' . $color);

        // Lien ingrédients
        $ingredients = new Menu();        
        $ingredients->setTitle('Ingrédients');
        $ingredients->setLink('');
        $ingredients->setPicture('/includes/icons/common/recipes' . $color . '.png');
        $ingredients->setAlt('');

        // Lien listes de courses
        $courses = new Menu();        
        $courses->setTitle('Listes de courses');
        $courses->setLink('');
        $courses->setPicture('/includes/icons/common/recipes' . $color . '.png');
        $courses->setAlt('');

        // Lien saisons
        $saisons = new Menu();        
        $saisons->setTitle('Les saisons');
        $saisons->setLink('');
        $saisons->setPicture('/includes/icons/common/recipes' . $color . '.png');
        $saisons->setAlt('');
       
        // Lien compte utilisateur
        $compte = new Menu();        
        $compte->setTitle('Mon compte');
        $compte->setLink('');
        $compte->setPicture('/includes/icons/common/recipes' . $color . '.png');
        $compte->setAlt('');

        // Liste des liens
        if ($isIndex)
            $menu = array($recettes, $ingredients, $courses, $saisons, $compte);
        else
            $menu = array($accueil, $recettes, $ingredients, $courses, $saisons, $compte);

        // Retour
        return $menu;
    }
?>