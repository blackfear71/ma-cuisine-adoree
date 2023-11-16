<?php
    // Import de la feuille de style
    echo '<link rel="stylesheet" href="/ma-cuisine-adoree/includes/assets/css/styleErrors.css?version=' . $dateModificationCssErrors . '" />';

    // Affichage de l'erreur
    echo '<div class="titre_erreur">';
        echo '<img src="/ma-cuisine-adoree/includes/icons/common/inside_red.png" alt="inside" title="Ma cuisine adorée" class="logo_erreur" />';
        echo $erreur;
    echo '</div>';

    // Lien retour au portail
    echo '<a href="/ma-cuisine-adoree/portail/portail/portail.php?action=goConsulter" class="lien_erreur">Revenir sur l\'accueil</a>';
?>