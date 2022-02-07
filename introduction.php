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

    <title>Repo PHP_POO : introduction</title>

    <style>
        body {
        font-size: 1.5em;
        }
    </style>
</head>

<body>

<!-- ====================================================== -->
<!--  EN-TETE : header à preceder de NAVBAR en require      --> 
<!-- ====================================================== --> 
    
<header class="container-fluid f-header p-4 mb-4 bg-light">
    <div class="col-12 text-center">
        <h1 class="display-4">PHP POO - PROGRAMMATION ORIENTÉE OBJET</h1>
        <h3>Introduction</h3>
        <p class="lead">Voir ce que dit Pierre Giraud 
            <a href="https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/introduction-programmation-orientee-objet/"><i class="bi bi-arrow-right-circle"></i></a>
        </p>
    </div>
</header>
<!-- fin container-fluid header -->
    <main class="container p-4">
        <section class="row mb-4 alert alert-primary">
            <div class="col-12">
                <h2>Qu’est-ce que la programmation orientée objet (POO) ?</h2>
                    <p>La programmation orientée objet (ou POO en abrégé) correspond à une autre manière d’imaginer, de construire et d’organiser son code.</p>
                    <p>Jusqu’à présent, nous avons codé de manière procédurale, c’est-à-dire en écrivant une suite de procédures et de fonctions dont le rôle était d’effectuer différentes opérations sur des données généralement contenues dans des variables et ceci dans leur ordre d’écriture dans le script.</p>
                    <p>La programmation orientée objet est une façon différente d’écrire et d’arranger son code autour de ce qu’on appelle des objets. Un objet est une entité qui va pouvoir contenir un ensemble de fonctions et de variables.</p>
                    <p>L’idée de la programmation orientée objet va donc être de grouper des parties de code qui servent à effectuer une tâche précise ensemble au sein d’objets afin d’obtenir une nouvelle organisation du code.</p>
                    <p>Les intérêts principaux de la programmation orientée objet vont être une structure générale du code plus claire, plus modulable et plus facile à maintenir et à déboguer.</p>
                    <p>la POO n’est pas si complexe : ce n’est qu’une façon différente de coder qui va amener de nombreux avantages.</p>
                    <p class="alert alert-danger">Ce ne sont plus des fonctions mais des ensembles de fonctions et de variables enfermées dans des objets et qui vont effectuer une tâche complexe qu’on va pouvoir utiliser directement pour commencer à créer des scripts complexes et complets !</p>    
            </div>
        </section>

        <section class="row p-2 mb-4 alert alert-primary">
            <div class="col-12">
                <h2>Classes, objets et instance</h2>
                <p class="lead">La programmation orientée objet se base sur un concept fondamental qui est que <code>tout élément dans un script est un objet ou va pouvoir être considéré comme un objet</code>. Pour comprendre ce qu’est précisément un objet, il faut avant tout comprendre ce qu’est une classe.</p>
            </div>
        </section>

        <section class="row justify-content-center p-4 mb-4">
            <div class="col-5 alert alert-primary m-4">
                <h2>Les Classes</h2>
                <p><code>Une classe est un bloc de code qui va contenir différentes variables, fonctions et éventuellement constantes et qui va servir de plan de création pour différents objets.</code></p>
                <p>Chaque objet créé à partir d’une même classe dispose des mêmes variables, fonctions et constantes définies dans la classe mais va pouvoir les implémenter différemment.</p>
            </div>

            <div class="col-5 alert alert-primary m-4">
                <h2>Classes et objets</h2>
                <p>Exemple : création d'une première classe qu’on va appeler <code>Utilisateur</code>.</p>

                <p>En PHP, on crée une nouvelle classe avec le mot clef <code>class</code>. On peut donner n’importe quel nom à une nouvelle classe du moment qu’on n’utilise pas un mot réservé du PHP et que le premier caractère du nom de notre classe soit une <code>lettre</code> ou un <code>underscore</code>.</p>

                <p>chaque nouvelle classe est créée dans un fichier à part et on placera également tous nos fichiers de classe dans un dossier qu’on pourra appeler <code>classes</code>, par exemple, pour plus de simplicité.</p>         
            </div>                        
        </section>


        <section class="row p-2 mb-4 alert alert-primary">
            <div class="col-12">  
                <h3>Qu’essaie-t-on de réaliser ici ? </h3>        
                <p>On veut « créer » un nouvel utilisateur à chaque fois qu’un visiteur s’enregistre à partir des informations qu’il nous a fournies. Un utilisateur va être défini par des attributs comme son nom d’utilisateur ou son mot de passe. Ces attributs vont être des variables. Ensuite, un utilisateur va pouvoir réaliser certaines actions spécifiques comme se connecter, se déconnecter, modifier son profil, etc. Ces actions vont être des fonctions.</p>

                <p>Nous allons donc définir les attributs et actions / fonctions de notre utilisateur. Pour cela, on va créer un formulaire d’inscription sur notre site qui va demander un nom d’utilisateur et un mot de passe d’un côté, et allons devoir côté serveur récupérer ces informations et les associer à un utilisateur en précisant qu’il s’agit du nom d’utilisateur et du mot de passe. On va également définir les actions (fonctions) propres à nos utilisateurs : connexion, déconnexion, possibilité de commenter, etc.

                <p>Sur notre site, on s’attend à avoir régulièrement de nouveaux visiteurs qui s’inscrivent et donc de nouveaux utilisateurs. Il est donc hors de question de définir toutes ces choses manuellement à chaque fois.A la place, on va plutôt créer un bloc de code qui va initialiser nos variables nom d’utilisateur et mot de passe par exemple et qui va définir les différentes actions que va pouvoir faire un utilisateur.</p>
            </div>
        </section>

        
        <section class="row p-2 mb-4 alert alert-primary">
            <h2>L'instanciation</h2>
            <div class="col-12">               
                <p>Le mot-clef new est utilisé pour instancier une classe c’est-à-dire créer une nouvelle instance d’une classe.</p>

                <p>Une instance correspond à la « copie » d’une classe. Le grand intérêt ici est qu’on va pouvoir effectuer des opérations sur chaque instance d’une classe sans affecter les autres instances.</p>

                <p>Par exemple, imaginons que vous créiez deux nouveaux fichiers avec le logiciel Word. Chaque fichier va posséder les mêmes options : vous allez pouvoir changer la police, la taille d’écriture, etc. Cependant, le fait de personnaliser un fichier ne va pas affecter la mise en page du deuxième fichier.</p>

                <p>A chaque fois qu’on instancie une classe, un objet est également automatiquement créé. Les termes « instance de classe » et « objet » ne désignent pas fondamentalement la même chose mais dans le cadre d’une utilisation pratique on pourra très souvent les confondre et c’est ce que nous allons faire dans ce cours.</p>

                <p>Pour information, la grande différence est que chaque instance de classe est unique et peut donc être identifiée de manière unique ce qui n’est pas le cas pour les objets d’une même classe.</p>

                <p><code>Lorsqu’on instancie une classe, un objet est donc créé. Nous allons devoir capturer cet objet pour l’utiliser. Pour cela, nous allons généralement utiliser une variable qui deviendra alors une « variable objet » ou plus simplement un « objet »</code></p>
            </div>
        </section>

        <section class="row p-2 mb-4 alert alert-primary">
            <h2>Classes, instances et objets : l’essentiel à retenir</h2>
            <div class="col-12">                
                <p>Une classe est un <code>« plan d’architecte » </code>qui va nous permettre de créer des objets qui vont partager ses variables et ses fonctions. Chaque objet créé à partir d’une classe va disposer des mêmes variables et fonctions définies dans la classe mais va pouvoir implémenter ses propres valeurs.Lorsqu’on instancie une classe, un objet est donc créé. Nous allons devoir capturer cet objet pour l’utiliser. Pour cela, nous allons généralement utiliser une variable qui deviendra alors une « variable objet » ou plus simplement un « objet »</p>

                <p>Pour créer un objet, il faut instancier la classe en utilisant le mot-clef <code>new</code>. Une instance est une « copie » de classe. On va stocker notre instance ou notre objet dans une variable pour pouvoir l’utiliser.</p>

                <p>Pour vous donner finalement un parallèle avec la vie de tous les jours, imaginez le plan de création de base d’un modèle de voiture. Ce plan va définir les différents éléments des voitures, c’est-à-dire de quoi va être composée chaque voiture (un moteur, des portes, des roues, une peinture, etc.) ainsi que les actions de chaque voiture, c’est-à-dire ce que peut faire chaque voiture (accélérer, allumer les phares, etc.).</p>

                <p>Nous allons pouvoir créer des voitures à partir de ce plan qui va être l’équivalent d’une classe et chaque voiture créée à partir de celui-ci va posséder les éléments (= variables) et actions (= fonctions) définies dans le plan. Les voitures créées sont ici nos objets.</p>

                <p>Cependant, les éléments vont pouvoir avoir des apparences différentes : chaque voiture va posséder un moteur mais le moteur va pouvoir être différent pour chaque voiture (plus ou moins puissant). De même, chaque voiture va posséder une couleur mais la couleur de chaque voiture va pouvoir être différente.</p>

                <p>Chaque voiture créée à partir du plan va avoir accès au même nombre d’actions mais les différentes actions des voitures vont être différentes en fonction des éléments de chaque voiture : chaque voiture va pouvoir accélérer mais une voiture avec un moteur plus puissant va accélérer plus vite qu’une autre qui possède un moteur plus petit.</p>
            </div>
        </section>

        <section class="row p-2 mb-4 alert alert-primary">
            <h2> Les propriétés : définition et usage</h2>
            <div class="col-12">
                <p>Dans le chapitre précédent, nous avons créé une classe Utilisateur qui ne contenait pas de code.</p>
            </div>

            <div class="col-12">
                <p>On va déjà pouvoir créer des variables à l’intérieur de nos classes. Les variables créées dans les classes sont appelées des <code>propriétés</code>, afin de bien les différencier des variables « classiques » créées en dehors des classes.</p>

                <p>Une propriété, c’est donc tout simplement une variable définie dans une classe (ou éventuellement ajoutée à un objet après sa création).</p>
            </div>

            <div class="col-12">
                <p>Reprenons immédiatement notre classe Utilisateur et ajoutons lui deux propriétés qu’on va appeler <code>$user_name</code> et <code>$user_pass</code> par exemple (pour « nom d’utilisateur » et « mot de passe utilisateur »).</p>
            </div>
        </section>          

        <section class="row p-2 mb-4 alert alert-primary">
            <h2>Les méthodes : définition et usage</h2>
            <p>Nous allons également pouvoir déclarer des fonctions à l’intérieur de nos classes.

            <p>Les fonctions définies à l’intérieur d’une classe sont appelées des méthodes. Là encore, nous utilisons un nom différent pour bien les différencier des fonctions créées en dehors des classes.</p>

            <p>Une méthode est donc tout simplement une fonction déclarée dans une classe. On va pouvoir créer des méthodes dans nos classes dont le rôle va être d’obtenir ou de mettre à jour les valeurs de nos propriétés.</p>

            <p>Dans notre classe Utilisateur, nous allons par exemple pouvoir créer trois méthodes qu’on va appeler getNom(), setNom() et setPass().</p>

            <p>Le rôle de getNom() va être de récupérer la valeur contenue dans la propriété $user_name.</p>

            <p>Les rôles de setNom() et de setPass() vont être respectivement de définir ou de modifier la valeur contenue dans les propriétés $user_name et $user_pass relativement à l’objet courant (la valeur de la propriété ne sera modifiée que pour l’objet couramment utilisé).</p>

            <p>Profitez-en pour noter que les méthodes qui servent à définir / modifier / mettre à jour une valeur sont appelées des setters. Généralement, on fera commencer leur nom par set afin de bien les identifier comme on l’a fait pour nos méthodes setNom() et setPass().</p>

            <p>De même, les méthodes qui servent à récupérer des valeurs sont appelées des getters et on fera commencer leur nom par get. Ces notations sont des conventions qui ont pour but de clarifier les scripts et de simplifier la vie des développeurs.</p>

            <p>Cela signifie que lorsqu’on va appeler une méthode de classe depuis un objet, la pseudo-variable $this va être remplacée (substituée) par l’objet qui utilise la méthode actuellement.</p>

            <p>Prenons un exemple concret afin que vous compreniez bien ce point important. Pour cela, retournons dans notre fichier de script principal et modifions quelques lignes comme cela :</p>
            
        </section>   

        <section class="row p-2 mb-4 alert alert-primary">
            <h2></h2>
            
        </section> 
    </main>
</body>
</html>