<?php
    // Initialisation
    $head = '';

    // Récupération de la plateforme
    $plateforme = getPlateforme();

    // Dates de dernière modification (CSS et JS) pour mise à jour automatique du cache du navigateur
    $dateModificationCss = filemtime($_SERVER['DOCUMENT_ROOT'] . '/ma-cuisine-adoree/includes/assets/css/' . $plateforme . '/style.css');
    $dateModificationJs = filemtime($_SERVER['DOCUMENT_ROOT'] . '/ma-cuisine-adoree/includes/assets/js/script.js');

    if (!empty($stylePage))
        $dateModificationCssPage = filemtime($_SERVER['DOCUMENT_ROOT'] . '/ma-cuisine-adoree/includes/assets/css/' . $plateforme . '/' . $stylePage);

    if (!empty($scriptPage))
        $dateModificationJsPage = filemtime($_SERVER['DOCUMENT_ROOT'] . '/ma-cuisine-adoree/includes/assets/js/' . $scriptPage);

    // Meta-données
    $head .= '<meta charset="utf-8" />';
    $head .= '<meta name="description" content="Bienvenue sur Ma cuisine adorée, portail de partage de recettes et d\'informations pratiques !" />';
    $head .= '<meta name="keywords" content="Ma cuisine adorée, cuisine, recettes, ingrédients, courses, saisons" />';

    // Styles communs
    $head .= '<link rel="icon" type="image/png" href="/ma-cuisine-adoree/favicon.png" />';
    $head .= '<link rel="stylesheet" href="/ma-cuisine-adoree/includes/assets/css/' . $plateforme . '/style.css?version=' . $dateModificationCss . '" />';

    // Styles spécifiques
    if (!empty($stylePage))
        $head .= '<link rel="stylesheet" href="/ma-cuisine-adoree/includes/assets/css/' . $plateforme . '/' . $stylePage . '?version=' . $dateModificationCssPage . '" />';

    // Titre
    if (!empty($titlePage))
        $head .= '<title>Ma cuisine adorée - ' . $titlePage . '</title>';
    else
        $head .= '<title>Ma cuisine adorée</title>';

    // Scripts communs
    $head .= '<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>';
    $head .= '<script>window.jQuery || document.write(\'<script src="/ma-cuisine-adoree/includes/libraries/js/jquery-3.6.3.min.js"><\/script>\')</script>';
    $head .= '<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>';
    $head .= '<script>window.jQuery || document.write(\'<script src="/ma-cuisine-adoree/includes/libraries/js/jquery-ui-1.13.2.min.js"><\/script>\')</script>';
    $head .= '<script src="/ma-cuisine-adoree/includes/assets/js/script.js?version=<?php echo $dateModificationJs; ?>"></script>';

    // Scripts spécifiques
    if (!empty($scriptHead))
        $head .= '<script src="/ma-cuisine-adoree/includes/assets/js/<?php echo $scriptHead; ?>?version=<?php echo $dateModificationJsPage; ?>"></script>';

    // Affichage
    echo $head;
?>