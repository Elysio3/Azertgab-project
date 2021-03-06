<html lang="en">
<head>
    <title>Application azertgab - Accueil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">
    <link href='foundation/foundation.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="foundation/foundation.css">
    <link rel="stylesheet" href="foundation/foundation.min.js">
    <link rel="stylesheet" href="foundation/foundation.min.css">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.js">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/normalize.css">
</head>
<body>

<!-- Début de la top-bar (menu) -->
<header>
    <div class="top-bar" style="position: sticky; top:0; width: 100%; z-index: 100">
        <!-- section gauche : logo -->
        <div class="top-bar-left text-left">
            <img style="height:75px; width: auto" src="images/logo.jpg" alt="logo site">

            <ul class="dropdown menu button-group" data-dropdown-menu style="padding-right: 75px">

                <li>
                    Menu
                    <ul class="menu">
                        <li><a href="?page=espace_admin" onclick="location.href='?page=espace_admin';">Espace admin</a></li>
                        <li><a href="?page=infos_compte" onclick="location.href='?page=infos_compte';">Mon compte</a></li>
                        <li><a href="?page=infos_serie" onclick="location.href='?page=infos_serie';">infos serie (tmp)</a></li>
                        <li><a href="?page=list_search_result" onclick="location.href='?page=list_search_result';">Résultat recherche (liste) (tmp)</a></li>
                        <li><a href="?page=login" onclick="location.href='?page=login';">Se connecter (tmp)</a></li>
                        <li><a href="?page=register" onclick="location.href='?page=register';">S'enregistrer</a></li>
                        <li><a href="?page=nouvelles_sorties" onclick="location.href='?page=nouvelles_sorties';">nouvelles_sorties</a></li>
                        <li><a href="?page=search_result" onclick="location.href='?page=search_result';">search_result</a></li>
                    </ul>
                </li>

            </ul>
        </div>

        <?php /*
        <!-- section milieu : titre -->
        */

        if(isset($_GET['page']) && ($_GET['page'] == "nouvelles_sorties" || $_GET['page'] == "infos_serie")) {
            echo '
                <div class="top-bar-title">
                        <ul class="menu">
                            <li><input type="search" placeholder="Search"></li>
                            <li><button type="button" class="button">Search</button></li>
                        </ul>
                </div>
            ';
        }

        ?>






    </div>
</header>
<!-- Fin de la top-bar (menu) -->

<!-- Début du contenu principal (main) -->
<main>

    <?php
    //inclut la vue (page) correspondante depuis l'url
    //ex : http://localhost/Azertgab-project/?page=login
    /**
     * vues disponibles :
     * login
     * register
     * infos_serie
     * espace_admin
     * search_result
     */
    if(isset($_GET['page'])) {
        include_once "views/".$_GET['page'].".php";
    }

    ?>

</main>
<!-- Fin du contenu principal (main) -->


<!--
<div class="row" id="content">
    <div class="grid-container">

        <div class="grid-x">
            <div class="medium-12 columns">
                <div class="medium-12 column text-left">
                    <h3 id="test">Sous titre</h3>
                    <p>paragraphe</p>
                </div>

            </div>
        </div>
    </div>
</div>

-->

<!-- Début du pied de page -->
<footer>
    <div class="medium-text-right" style="padding-right: 15px">
        <p>
            Copyright © <script>document.write(new Date().getFullYear());</script> All rights reserved | Website by Maël KERVICHE</a>
        </p>
    </div>
</footer>
<!-- Fin du pied de page -->

<!-- scripts javascript (required) / jquery (required) -->
<script src="foundation/js/foundation.min.js"></script>
<script src="foundation/js/foundation/foundation.js"></script>
<script src="foundation/js/foundation/foundation.dropdown.js"></script>
<script src="foundation/js/foundation/foundation.topbar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type='text/javascript' src='js/jquery-1.11.1.min.js'></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>$(document).foundation();</script>

</body>
</html>
