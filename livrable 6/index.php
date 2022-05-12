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
            <a href="#contenu" class="delivery-link">
                <span class="scroll-text" data-text="Scroll">Scroll</span>
                <i class="scroll-icon fas fa-angle-down"></i>
            </a>
        </div>
    </section>
    <section id="contenu" class="delivery-container">
        <div class="shop">
            <i class="delivery-icon fas fa-store"></i>
            <p class="box-content">
                Nos magasins à votre service
            </p>
        </div>
        <div class="withdrawal">
            <i class="delivery-icon fas fa-people-carry"></i>
            <p class="box-content">
                Retrait en magasin sans contact
            </p>
        </div>
        <div class="delivery">
            <i class="delivery-icon fas fa-truck"></i>
            <p class="box-content">
                Livraison à domicile sans contact
            </p>
        </div>
    </section>
    <section id="best-sales" class="best-sales-container">
        <h1 class="section-title">Promotions</h1>
        <div class="best-plants">
            <a href="description_plante.php" class="plant-box no-grid plant1">
                <div class="plant-bio">
                    <h1 class="plant-name">Plante</h1>
                    <h3 class="plant-price">24,99€</h3>
                </div>
            </a>
            <a href="description_plante.php" class="plant-box no-grid plant2">
                <div class="plant-bio">
                    <h1 class="plant-name">Plante</h1>
                    <h3 class="plant-price">19,99€</h3>
                </div>
            </a>
            <a href="description_plante.php" class="plant-box no-grid plant3">
                <div class="plant-bio">
                    <h1 class="plant-name">Plante</h1>
                    <h3 class="plant-price">24,99€</h3>
                </div>
            </a>
            <a href="description_plante.php" class="plant-box no-grid plant4">
                <div class="plant-bio">
                    <h1 class="plant-name">Plante</h1>
                    <h3 class="plant-price">22,99€</h3>
                </div>
            </a>
        </div>
    </section>

    <footer id="footer" class="footer">
        <span class="copyright">&copy; 2022 - Jardin de Gaïa </span>
        <a href="qui_sommes_nous.php" class="team">Qui Sommes-nous ?</a>
    </footer>
</body>

</html>