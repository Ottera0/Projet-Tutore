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
            <a href="#panier" class="delivery-link">
                <span class="scroll-text" data-text="Scroll">Scroll</span>
                <i class="scroll-icon fas fa-angle-down"></i>
            </a>
        </div>
    </section>

    <section id="panier" class="panier">
        <h1 class="section-title">Recapitulatif de mon panier</h1>
        <div class="panier-tab">
            <div class="article">
                <div class="article-description">
                    <div class="article-image">
                        <img src="images/nos_promotions/4.jpg" alt="" height="300">
                    </div>
                    <div class="article-info">
                        <h2 class="article-name">
                            <a href="description_plante.php">Philodendron squamiferum</a>
                        </h2>
                        <p class="article-unit-price">
                            Prix unitaire : 22,99€
                        </p>
                        <table>
                            <tr>
                                <td> <i class="fas fa-minus"></i> </td>
                                <td> 1 </td>
                                <td> <i class="fas fa-plus"></i></td>
                            </tr>
                        </table>
                        <i class="far fa-trash-alt"></i>
                    </div>
                    
                </div>
                <div class="article-total">

                    <p>
                        Prix total : 22,99€
                    </p>
                </div>       
            </div>

            <div class="article">
                <div class="article-description">
                    <div class="article-image">
                        <img src="images/nos_promotions/1.jpg" alt="" height="300">
                    </div>
                    <div class="article-info">
                        <h2 class="article-name">
                            <a href="description_plante.php">Philodendron squamiferum</a>
                        </h2>
                        <p class="article-unit-price">
                            Prix unitaire : 24,99€
                        </p>
                        <table>
                            <tr>
                                <td> <i class="fas fa-minus"></i> </td>
                                <td> 1 </td>
                                <td> <i class="fas fa-plus"></i></td>
                            </tr>
                        </table>
                        <i class="far fa-trash-alt"></i>
                    </div>
                    
                </div>
                <div class="article-total">

                    <p>
                        Prix total : 24,99€
                    </p>
                </div>       
            </div>
            
            <div class="total">
                <div class="total-products">
                    <p>Produits</p>
                    <p>47,98€</p>
                </div>
                <div class="total-delivery">
                    <p>Livraison</p>
                    <p>4,99€</p>
                </div>
                <hr>
                <div class="total-price">
                    <p>Total</p>
                    <p>52,97€</p>
                </div>
                <div class="total-buy">
                    <form  style="display: inline" action="achat.php" method="get">
                        <button class="buy-button">Acheter</button>
                      </form>

                </div>
            </div>
        </div>
    </section>




        
    <footer id="footer" class="footer">
        <span class="copyright">&copy; 2022 - Jardin de Gaïa </span>
        <a href="qui_sommes_nous.php" class="team">Qui Sommes-nous ?</a>
    </footer>