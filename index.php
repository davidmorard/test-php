<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP

        </title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Page de test
        </h2>
        <p>
            <?php 
            $isEnable = "non" ; // la condition d'accès
            if ($isEnable === "oui") {
                echo "Vous êtes autorisé à accéder au site !";
            }
            elseif ($isEnable === "non") {
                echo "Vous n'avez pas accès au site !";
            }
            else {
                echo "Je ne comprends pas ce que vous voulez dire";
            }
            ?>
        </p>
        <p>
            Cette page contient du code HTML avec des balises PHP.
            <br />
            <?php
            $authorName ="David MORARD";
            echo "Le nom de l'auteur est "; 
            echo $authorName;
            ?>
        </p>
        <p>
            Voici quelques petits tests :
        </p>

        <ul>
            <li style="color: blue;">Texte en bleu
        </li>
            <li style="color: red;">Texte en rouge
        </li>
            <li style="color green;">Texte en vert
        </li>
        </ul>

        <?php
        /* Encore du PHP
        Toujours du PHP */
        ?>
    </body>
</html>




