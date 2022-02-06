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

            <form action='cours-2.php' method='post'>
                <label for='nom'>Nom d'utilisateur : </label>
                <input type='text' name='nom' id='nom'><br>
                <label for='pass'>Choisissez un mot de passe.</label>
                <input type='password' name='pass' id='pass'><br>
                <input type='submit' value='Envoyer'>
            </form>
        
        <?php
        if ( !empty($_POST)) {
            require 'classes/utilisateur.class.php';
            //+ Vérification des données reçues (regex + filtres)
            //+ Stockage des données (base de données)
            $pierre = new Utilisateur($_POST['nom'], $_POST['pass']);
            echo $pierre->getNom(). '<br>';
        }
        ?>
        <p>Un paragraphe</p>
    </body>
</html>