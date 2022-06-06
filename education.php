<!DOCTYPE html>

<html>
    <head>
    <title>Education</title>
    <link  rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
    </head>


<body>
    <header>

        <div>
            <h1 class="actu">Actualités Polytechniciennes</h1>
        </div>

        <div class="content">    
            <nav>
                <a href="index.php">Accueil</a>
                <a href="sport.php">Sport</a>
                <a href="sante.php">Santé</a>
                <a href="education.php">Education</a>
                <a href="politique.php">Politique</a>
            </nav>
        </div>  
    </header>

    <section>
    <div id="our_news">
            <?php 
                require "connexion_education.php";
                foreach ($article as $articles) { ?>
                <div class="new-wrap" data-id="<?php $articles["id"]?>">
                <div class="new-title"><?=$articles["titre"]?></div>
                <div class="new-desc"><?=$articles["contenu"]?></div>
                </div>
            <?php }
            ?>
      </div>
    </section>

    <footer>
        <div class="pieds">
            <h8>2022 - Tous les droits réservés - Ecole Supérieure Polytechnique</h8>
        </div>
    </footer>

</body>
</html>  