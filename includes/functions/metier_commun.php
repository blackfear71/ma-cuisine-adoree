<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/ma-cuisine-adoree/includes/classes/menu.php');

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
            $accueil->setLink('/ma-cuisine-adoree/index.php?action=goConsulter');
            $accueil->setPicture('/ma-cuisine-adoree/includes/icons/common/recipes' . $color . '.png');
            $accueil->setAlt('recipes' . $color);
        }
        else
            $color = '';
        
        // Lien recettes
        $recettes = new Menu();        
        $recettes->setTitle('Recettes');
        $recettes->setLink('/ma-cuisine-adoree/site/recettes/recettes.php?action=goConsulter');
        $recettes->setPicture('/ma-cuisine-adoree/includes/icons/common/recipes' . $color . '.png');
        $recettes->setAlt('recipes' . $color);

        // Lien ingrédients
        $ingredients = new Menu();        
        $ingredients->setTitle('Ingrédients');
        $ingredients->setLink('');
        $ingredients->setPicture('/ma-cuisine-adoree/includes/icons/common/recipes' . $color . '.png');
        $ingredients->setAlt('');

        // Lien listes de courses
        $courses = new Menu();        
        $courses->setTitle('Listes de courses');
        $courses->setLink('');
        $courses->setPicture('/ma-cuisine-adoree/includes/icons/common/recipes' . $color . '.png');
        $courses->setAlt('');

        // Lien saisons
        $saisons = new Menu();        
        $saisons->setTitle('Les saisons');
        $saisons->setLink('');
        $saisons->setPicture('/ma-cuisine-adoree/includes/icons/common/recipes' . $color . '.png');
        $saisons->setAlt('');
       
        // Lien compte utilisateur
        $compte = new Menu();        
        $compte->setTitle('Mon compte');
        $compte->setLink('');
        $compte->setPicture('/ma-cuisine-adoree/includes/icons/common/recipes' . $color . '.png');
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