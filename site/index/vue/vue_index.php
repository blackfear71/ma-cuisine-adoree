<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Head commun & spécifique-->
        <?php
            $titlePage  = '';
            $stylePage  = 'styleIndex.css';
            $scriptPage = '';

            include('includes/common/head.php');
        ?>
    </head>

    <body>
        <!-- Contenu -->
        <section class="section_index">
            <article class="article_index">
                <?php
                    // Initialisation
                    $index = '';

                    // Logo et titre
                    $index .= '<div class="conteneur_index">';
                        // Logo
                        $index .= '<img src="/ma-cuisine-adoree/favicon.png" alt="favicon" title="Ma cuisine adorée" class="image_index" />';

                        // Titre
                        $index .= '<div class="titre_index">Ma cuisine adorée</div>';
                    $index .= '</div>';

                    // Affichage
                    echo $index;
                ?>
            </article>

            <aside>
                <?php
                    // Initialisation
                    $index = '';

                    // Liens du menu
                    foreach ($menu as $lienMenu)
                    {
                        $index .= '<a href="' . $lienMenu->getLink() . '" class="lien_aside">';
                            $index .= '<div class="conteneur_aside">';
                                $index .= '<img src="' . $lienMenu->getPicture() . '" alt="' . $lienMenu->getAlt() . '" title="' . $lienMenu->getTitle() . '" class="image_lien_aside" />';
                                $index .= '<div class="titre_lien_aside">' . $lienMenu->getTitle() . '</div>';
                            $index .= '</div>';
                        $index .= '</a>';
                    }

                    // Affichage
                    echo $index;
                ?>
            </aside>
        </section>

        <!-- Pied de page -->
        <footer>
            <?php include('includes/common/footer.php'); ?>
        </footer>
    </body>
</html>