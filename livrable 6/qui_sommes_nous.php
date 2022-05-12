<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="images/logo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
    <title>Jardin de Gaïa</title>
</head>

<body>
    <section id="home" class="home-container">
        <header id="header" class="header">
            <a href="index.php"> <img src="images/logo.png" alt="logo" class ="logo"> </a>
            <ul class="nav-links">
                <li>
                    <a href="index.php" data-text="Accueil">Accueil</a>
                </li>
                <li>
                    <a href="produits.php" data-text="Nos plantes">Nos plantes</a>
                </li>
                <li>
                    <a href="details_techniques.php" data-text="Détails techniques">Détails techniques</a>
                </li>
                <li >
                    <a href="panier.php" data-text="Panier">Panier</a>
                </li>
                <li>
                    <a href="connexion.php" data-text="Inscription/Connexion">Inscription/Connexion</a>
                </li>
                <li>
                    <form action="produits.php">
                        <input type="search" placeholder="  Rechercher">
                    </form>
                </li>


            </ul>

        </header>
        <div class="landing">
            <h1 class="big-title">Cultivez votre bien-être.</h1>
            <a href="#qui-sommes-nous" class="delivery-link">
                <span class="scroll-text" data-text="Scroll">Scroll</span>
                <i class="scroll-icon fas fa-angle-down"></i>
            </a>
        </div>
    </section>
    
    <section id="qui-sommes-nous" class="qui-sommes-nous">
        <h1 class="section-title">Qui sommes-nous ?</h1>
        <div class="presentation">
            <h2>Présentation du site</h2>
            <p>
                Ce site est une maquette d'un site de vente en ligne en l'occurence, de plantes vertes.<br>
                Il a été réalisé dans le cadre d'un projet de cours de HTML/CSS.<br>
            </p>
        </div>

        <div class="createur">
            <h2>Créateur</h2>
            <p>
                Je m'appelle Ewan Cereza, j'ai 21 ans et je suis actuellement en IUT Informatique Annee Speciale (1 an),<br>
                et j'ai réalisé cette maquette de site Internet dans le cadre d'un projet d'étude adns le cours de Web avec Mr. Daniel Muller.
            </p>
        </div>

        <div class="shop">
            <h2>Notre magasin</h2>
            <p>
                Pour venir recupérer vos commandes, il est également possible de venir a notre magasin<br>
                Nous sommes ouverts 7j/7 de 9h a 19h.<br>
            </p>
            <a href="https://www.google.fr/maps/place/botanic%C2%AE+Ecully/@45.7675493,4.7665124,17z/data=!3m1!4b1!4m5!3m4!1s0x47f4ec8a5b90fb3d:0xd383d836ad444b7e!8m2!3d45.7675573!4d4.7688945"><img src="images/map.png" alt="map" class="map" /></a>
        </div>
    </section>

    <footer id="footer" class="footer">
        <span class="copyright">&copy; 2022 - Jardin de Gaïa </span>
        <a href="qui_sommes_nous.php" class="team">Qui Sommes-nous ?</a>
    </footer>