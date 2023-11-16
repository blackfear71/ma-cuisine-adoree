<?php
    // Numéro de version
    $version = '1.0';

    // Version
    echo '<div class="version">v' . $version . '</div>';

    // Copyright
    if (date('Y') != 2023)
        echo '<div class="copyright">© 2023-' . date('Y') . ' - Ma cuisine adorée</div>';
    else
        echo '<div class="copyright">© 2023 - Ma cuisine adorée</div>';
?>