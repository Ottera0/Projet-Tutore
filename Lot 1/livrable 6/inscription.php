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
            <a href="#panier" class="delivery-link">
                <span class="scroll-text" data-text="Scroll">Scroll</span>
                <i class="scroll-icon fas fa-angle-down"></i>
            </a>
        </div>
    </section>


    <section id="inscription" class="inscription">
        <h1 class="section-title">Inscription</h1>
        <form method="post">
            <input type="text" name="nom" id="nom" placeholder="Nom" required> <br/>
            <input type="text" name="prenom" id="prenom" placeholder="Prenom" required> <br/>
            <input type="email" name="email" id="email" placeholder="exemple@gmail.com" required> <br/>
            <input type="password" name="password" id="password" placeholder="password" required><br/>
            <input type="text" name="adresse" id="adresse" placeholder="Adresse" required> <br/>
            <input type="number" name="codePostal" id="codePostal" placeholder="69000" required> <br/>
            <input type="text" name="ville" id="ville" placeholder="Ville" required> <br/>
            <input type="text" name="pays" id="pays" placeholder="pays"> <br/>
            <input type="number" name="numTel" id="numTel" placeholder="Numero de telephone" required> <br/>
            <input type="submit" name="connexion" id="connexion">
        </form>

        
        <?php
        include 'database.php';
        global $db;
        ?>
    </section>
    <footer id="footer" class="footer">
        <span class="copyright">&copy; 2022 - Jardin de Gaïa </span>
        <a href="qui_sommes_nous.php" class="team">Qui Sommes-nous ?</a>
    </footer>