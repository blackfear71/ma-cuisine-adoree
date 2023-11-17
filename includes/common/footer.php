<?php
    // Initialisations
    $footer = '';

    // Version
    $version = '1.0';

    $footer .= '<div class="version">v' . $version . '</div>';

    // Copyright
    $dateDebutSite    = '2023';
    $dateActuelleSite = date('Y');

    if ($dateDebutSite == $dateActuelleSite)
        $footer .= '<div class="copyright">© ' . $dateDebutSite . ' - Ma cuisine adorée</div>';
    else
        $footer .= '<div class="copyright">© ' . $dateDebutSite . '-' . $dateActuelleSite . ' - Ma cuisine adorée</div>';

    // Affichage
    echo $footer;
?>