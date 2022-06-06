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
                Ce site est un site de vente en ligne en l'occurence, de plantes vertes.<br>
                Il a été réalisé dans le cadre d'un projet tutore. <br>
                Sur ce site, vous pouvez consulter le catalogue produits, en solde ou non, apres vous etre connecte a votre compte.
                <br>
                De notre cote, nous gerons tout le catalogue produit sur une application de gestion de stock en java.<br>
            </p>
        </div>

        <div class="createur">
            <h2>Créateurs</h2>
            <p>
                Ce projet a ete co-cree par Florian Hauwelle et Ewan Cereza<br>
                Deux etudiants en Annee speciale informatique a l'IUT Lyon 1.
            </p>
        </div>

        <div class="shop">
            <h2>Notre magasin</h2>
            <p>
                Pour venir recupérer vos commandes, il est également possible de venir a notre magasin<br>
                Nous sommes ouverts 7j/7 de 9h a 19h.<br>
            </p>
            <br>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.1818550365047!2d4.768701099999999!3d45.76754559999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ec8a5b90fb3d%3A0xd383d836ad444b7e!2sbotanic%C2%AE%20Ecully!5e0!3m2!1sen!2sfr!4v1654245337945!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        </div>
    </section>

    <footer id="footer" class="footer">
        <span class="copyright">&copy; 2022 - Jardin de Gaïa </span>
        <a href="qui_sommes_nous.php" class="team">Qui Sommes-nous ?</a>
    </footer>