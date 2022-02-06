
<!DOCTYPE html>
<html lang="fr">
<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,600;1,400&family=Belgrano&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>

    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Mes styles -->
    <link rel="stylesheet" href="css/styles.css" >

    <title>Gabarit pour le dossier objet_PHP (programmation orientée objet)</title>
</head>

<body>

    <!-- ====================================================== -->
    <!--  EN-TETE : header à preceder de NAVBAR en require      --> 
    <!-- ====================================================== --> 
    
    <?php 
        require_once 'inc/navbar.inc.php';
    ?> 

    <header class="container-fluid f-header p-2 mb-4 bg-light">
        <div class="col-12 text-center">
            <h1 class="display-4">TITRE NIVEAU 1</h1>
            <p class="lead">Un paragraphe class="lead"</p>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
                <?php
                    // $positiva = "Tudo joia!";
                    // echo "<p class=\"text-dark\">$positiva</p>";
                ?>
        </div>
    </header>
    <!-- fin container-fluid header -->
    
    <!-- ====================================================== -->
    <!--                CONTAINER : contenu principal           --> 
    <!-- ====================================================== -->
    <main class="container p-2">
        <section class="row justify-content-center p-4">
        
        </section>
        <!-- fin row -->

        <section>
            <div class="col-md-4 mx-auto m-4">
                <h2 class="m-4 p-4 text-center"></h2>  
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->

        <section>
            <div class="col-md-10 mx-auto m-4">
                <h2 class="m-4 p-4 text-center"></h2>         
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->
    </main>
    <!-- fin container -->

    <!-- ====================================================== -->
    <!--                  FOOTER : en require                   --> 
    <!-- ====================================================== -->  


    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP - POO</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1><!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1 class="display-4">PHP POO - PROGRAMMATION ORIENTÉE OBJET</h1>
        <p class="lead">Cours avec Christian Maurence en visio</p>

        <p>L’encapsulation désigne le principe de regroupement des données et du code qui les utilise au sein d’une même unité. On va très souvent utiliser le principe d’encapsulation afin de protéger certaines données des interférences extérieures en forçant l’utilisateur à utiliser les méthodes définies pour manipuler les données.<br>

        Dans le contexte de la programmation orientée objet en PHP, l’encapsulation correspond au groupement des données (propriétés, etc.) et des données permettant de les manipuler au sein d’une classe. <br>

        L’encapsulation va ici être très intéressante pour empêcher que certaines propriétés ne soient manipulées depuis l’extérieur de la classe. Pour définir qui va pouvoir accéder aux différentes propriétés, méthodes et constantes de nos classes, nous allons utiliser des limiteurs d’accès ou des niveaux de visibilité qui vont être représentés par les mots clefs public, private et protected.</p>
        
        
        
        <p>Un paragraphe</p>
    </body>
</html></h1>
        
       
        <p>Un paragraphe</p>
    </body>
</html>