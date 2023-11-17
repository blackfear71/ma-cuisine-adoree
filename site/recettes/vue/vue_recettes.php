<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Head commun & spécifique-->
        <?php
            $titlePage  = '';
            $stylePage  = '';
            $scriptPage = '';

            include('../../includes/common/head.php');
        ?>
    </head>

    <body>
        <!-- Navigation -->
        <nav>
            <?php
                // Initialisation
                $index = '';





                // TODO : à mettre en commun
                // Liens du menu
                foreach ($menu as $lienMenu)
                {
                    $index .= '<a href="' . $lienMenu->getLink() . '" class="lien_nav">';
                        $index .= '<img src="' . $lienMenu->getPicture() . '" alt="' . $lienMenu->getAlt() . '" title="' . $lienMenu->getTitle() . '" class="image_lien_nav" />';
                    $index .= '</a>';
                }





                // Affichage
                echo $index;
            ?>
        </nav>

        <!-- Entête -->
        <header>
            <?php
                echo 'Header';
            ?>
        </header>

        <!-- Contenu -->
        <section>
            <article>
                <?php
                    echo 'Article';
                ?>
            </article>
        </section>

        <!-- Pied de page -->
        <footer>
            <?php include('../../includes/common/footer.php'); ?>
        </footer>
    </body>
</html>