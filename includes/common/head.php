<?php


    // TODO : plateforme comme pour shine/bte, uniquement pour le style/js




    // Dates de dernière modification CSS pour mise à jour automatique du cache du navigateur
    $dateModificationCss = filemtime($_SERVER['DOCUMENT_ROOT'] . '/ma-cuisine-adoree/includes/assets/css/style.css');

    if (!empty($styleHead))
        $dateModificationCssSection = filemtime($_SERVER['DOCUMENT_ROOT'] . '/ma-cuisine-adoree/includes/assets/css/' . $styleHead);

    // Dates de dernière modification JS pour mise à jour automatique du cache du navigateur
    $dateModificationJs = filemtime($_SERVER['DOCUMENT_ROOT'] . '/ma-cuisine-adoree/includes/assets/js/script.js');

    if (!empty($scriptHead))
        $dateModificationJsSection = filemtime($_SERVER['DOCUMENT_ROOT'] . '/ma-cuisine-adoree/includes/assets/js/' . $scriptHead);

    // Meta-données
    echo '<meta charset="utf-8" />';
    echo '<meta name="description" content="Bienvenue sur Ma cuisine adorée, portail de partage de recettes et d\'informations pratiques !" />';
    echo '<meta name="keywords" content="Ma cuisine adorée, cuisine, recettes, ingrédients, courses, saisons" />';

    // Styles communs
    echo '<link rel="icon" type="image/png" href="/ma-cuisine-adoree/favicon.png" />';
    echo '<link rel="stylesheet" href="/ma-cuisine-adoree/includes/assets/css/style.css?version=' . $dateModificationCss . '" />';

    // Styles spécifiques
    if (!empty($styleHead))
        echo '<link rel="stylesheet" href="/ma-cuisine-adoree/includes/assets/css/' . $styleHead . '?version=' . $dateModificationCssSection . '" />';

    // Titre
    if (!empty($titleHead))
        echo '<title>Ma cuisine adorée - ' . $titleHead . '</title>';
    else
        echo '<title>Ma cuisine adorée</title>';
?>

<!-- Scripts communs -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="/ma-cuisine-adoree/includes/libraries/js/jquery-3.6.3.min.js"><\/script>')
</script>

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="/ma-cuisine-adoree/includes/libraries/js/jquery-ui-1.13.2.min.js"><\/script>')
</script>

<script src="/ma-cuisine-adoree/includes/assets/js/script.js?version=<?php echo $dateModificationJs; ?>"></script>

<!-- Scripts spécifiques -->
<?php if (!empty($scriptHead)) { ?>
    <script src="/ma-cuisine-adoree/includes/assets/js/<?php echo $scriptHead; ?>?version=<?php echo $dateModificationJsSection; ?>"></script>
<?php } ?>