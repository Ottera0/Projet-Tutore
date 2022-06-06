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
            <a href="#product" class="delivery-link">
                <span class="scroll-text" data-text="Scroll">Scroll</span>
                <i class="scroll-icon fas fa-angle-down"></i>
            </a>
        </div>
    </section>
    
    <section id="product" class="product-container">
        <div class="product-tab">
            <div class="img-product"> 
                <h1 class="section-title">Philodendron squamiferum</h1>
        
                <img  src="images/nos_promotions/4.jpg" alt="" height="650"/> 
            </div>

            <div class="product-text">
                <p class="pros">
                    Les points forts :
                </p>
                    <ul class="pros2">
                        <li>
                            Un feuillage très ornemental
                        </li>
                        <li>
                            Un entretien aisé
                        </li>
                        <li>
                            Une touche de déco exotique
                        </li>
                    </ul>


                
                <div class="text">
                    <p>
                        Magnifique plante exotique au port buissonnant formé par de belles feuilles à la forme très originale, le Philodendron squamiferum a de quoi charmer. Elle est en effet très ornementale et trouvera assurément sa place dans tous vos espaces intérieurs pour leur apporter une touche de végétation. Cette plante exotique ne supporte pas les températures en-dessous de 10°C est devra donc être cultivée dans une serre chaude ou encore dans un intérieur, comme dans un salon ou un bureau. Sans réel entretien contraignant, ce Philodendron squamiferum sera conseillé pour les jardiniers amateurs ou débutants.
                    </p>
                </div>

                <div class="text2">
                    <p>
                        Aimant la douceur et les espaces ensoleillés, vous devrez offrir à votre Philodendron squamiferum un lieu où il pourra se gorger de chaleur en le disposant près d’une fenêtre ou encore en le plaçant dans une serre chaude. Ajoutez à votre terre de plantation un terreau de bonne qualité qui lui sera nécessaire pour se nourrir grâce à de nombreux nutriments. Les plantes en pot ont en effet tendance à s’appauvrir plus rapidement si un apport conséquent de différents nutriments ne leur est pas apporté. 
                    </p>
                    
                </div>
            </div>
            <div class="plant-price-column">
                <div class="plant-price-box">
                    <div class="plant-price-box2">
                        <p class="price-tag">
                            22,99 €
                        </p>
        
                        <p class="unit">
                            l'unite
                        </p>
                    </div>
                    <div class="add-cart">
                        <form  style="display: inline" action="panier.php" method="get">
                            <button class="add-button">Ajouter au panier</button>
                          </form>

                    </div>
    
                </div>

            <div class="deliveries">
                <p class="delivery-mode">
                    Modes de livraison disponibles : 
                </p>

                <ul class="delivery-choice">
                    <li>
                        Livre chez vous sous 8 jours
                    </li>
                    <li>
                        Retrait en magasin gratuit sous 8 jours
                    </li>
                    <li>
                        Livre en point relais sous 8 jours
                    </li>
                </ul>
            </div>

            
        </div>        
        

        </div>
        
    </section>

    <footer id="footer" class="footer">
        <span class="copyright">&copy; 2022 - Jardin de Gaïa </span>
        <a href="qui_sommes_nous.php" class="team">Qui Sommes-nous ?</a>
    </footer>