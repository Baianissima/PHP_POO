<!DOCTYPE html>
<html>
    <head>
        <title>Repo PHP_POO</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1 class="display-4">PHP POO - PROGRAMMATION ORIENTÉE OBJET</h1>
        <p class="lead">Cours avec Christian Maurence en visio</p>

        <?php
            require 'classes/utilisateur.class.php';
            require 'classes/admin.class.php';
            
            // $pierre = new Utilisateur();
            // $pierre->setNom('Pierre');
            // $pierre->setPasse('abcdef');
            $pierre = new Admin('Pierre', 'abcdef');
            $mathilde = new Utilisateur('Mathilde', 123456);

            // $mathilde = new Utilisateur();
            
            echo $pierre->getNom2(). '<br>';
            echo $pierre->getNom(). '<br>';
            echo $mathilde->getNom(). '<br>';
        ?>
        <p>Un paragraphe</p>
    </body>
</html>