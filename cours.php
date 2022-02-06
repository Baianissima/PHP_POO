<!DOCTYPE html>
<html>
    <head>
        <title>Repo PHP_POO</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1 class="display-4">PHP POO - PROGRAMMATION ORIENTÉE OBJET</h1>
        <p class="lead">Introduction - Cours avec Christian Maurence en visio</p>

        <section class="row p-2 mb-4">
            <div class="col-10">
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
            </div>
        </section>

        <section class="row p-2 mb-4">
            <div>
                <h2>Qu’est-ce que la programmation orientée objet (POO) ?</h2>
                    <p>La programmation orientée objet (ou POO en abrégé) correspond à une autre manière d’imaginer, de construire et d’organiser son code.</p>
                    <p>Jusqu’à présent, nous avons codé de manière procédurale, c’est-à-dire en écrivant une suite de procédures et de fonctions dont le rôle était d’effectuer différentes opérations sur des données généralement contenues dans des variables et ceci dans leur ordre d’écriture dans le script.</p>
                    <p>La programmation orientée objet est une façon différente d’écrire et d’arranger son code autour de ce qu’on appelle des objets. Un objet est une entité qui va pouvoir contenir un ensemble de fonctions et de variables.</p>
                    <p>L’idée de la programmation orientée objet va donc être de grouper des parties de code qui servent à effectuer une tâche précise ensemble au sein d’objets afin d’obtenir une nouvelle organisation du code.</p>
                    <p>Les intérêts principaux de la programmation orientée objet vont être une structure générale du code plus claire, plus modulable et plus facile à maintenir et à déboguer.</p>
                    <p>la POO n’est pas si complexe : ce n’est qu’une façon différente de coder qui va amener de nombreux avantages.</p>
                    <code><p>Ce ne sont plus des fonctions mais des ensembles de fonctions et de variables enfermées dans des objets et qui vont effectuer une tâche complexe qu’on va pouvoir utiliser directement pour commencer à créer des scripts complexes et complets !</p></code>        
            </div>
        </section>

        <section class="row p-2 mb-4">
            <div class="col-10">
                <h2>Classes, objets et instance : première approche</h2>
                <p class="lead">La programmation orientée objet se base sur un concept fondamental qui est que tout élément dans un script est un objet ou va pouvoir être considéré comme un objet. Pour comprendre ce qu’est précisément un objet, il faut avant tout comprendre ce qu’est une classe.</p>
            </div>
        </section>

        <section class="row p-2 mb-4">
            <div class="col-5">
                <h2>Classes, objets et instance : première approche</h2>
                <p class="lead">La programmation orientée objet se base sur un concept fondamental qui est que tout élément dans un script est un objet ou va pouvoir être considéré comme un objet. Pour comprendre ce qu’est précisément un objet, il faut avant tout comprendre ce qu’est une classe.</p>
            </div>            

            <div class="col-5">  
                <h3>Qu’essaie-t-on de réaliser ici ? </h3>        
                <p>On veut « créer » un nouvel utilisateur à chaque fois qu’un visiteur s’enregistre à partir des informations qu’il nous a fournies. Un utilisateur va être défini par des attributs comme son nom d’utilisateur ou son mot de passe. Ces attributs vont être des variables. Ensuite, un utilisateur va pouvoir réaliser certaines actions spécifiques comme se connecter, se déconnecter, modifier son profil, etc. Ces actions vont être des fonctions.</p>

                <p>Nous allons donc définir les attributs et actions / fonctions de notre utilisateur. Pour cela, on va créer un formulaire d’inscription sur notre site qui va demander un nom d’utilisateur et un mot de passe d’un côté, et allons devoir côté serveur récupérer ces informations et les associer à un utilisateur en précisant qu’il s’agit du nom d’utilisateur et du mot de passe. On va également définir les actions (fonctions) propres à nos utilisateurs : connexion, déconnexion, possibilité de commenter, etc.

                <p>Sur notre site, on s’attend à avoir régulièrement de nouveaux visiteurs qui s’inscrivent et donc de nouveaux utilisateurs. Il est donc hors de question de définir toutes ces choses manuellement à chaque fois.A la place, on va plutôt créer un bloc de code qui va initialiser nos variables nom d’utilisateur et mot de passe par exemple et qui va définir les différentes actions que va pouvoir faire un utilisateur.</p>

</p>
            </div>
        </section>

        <section class="row p-2 mb-4">
            <div class="col-5">               
                
            </div>
        </section>
        
        <p>Un paragraphe</p>
    </body>
</html>