<!DOCTYPE html>
<html lang="fr">
<?php
    include 'includes/database.php';

    global $db;
    $idProduit = $_GET['id'];

    //Recuperation des infos avec l'idProduit passe en parametre
    $nomQuery = $db->prepare('SELECT nomProduit FROM produit WHERE idProduit = :idProduit');
    $nomQuery->execute(['idProduit' => $idProduit]);
    $nom = $nomQuery->fetch();

    $descriptionQuery = $db->prepare('SELECT description FROM produit WHERE idProduit = :idProduit');
    $descriptionQuery->execute(['idProduit' => $idProduit]);
    $description = $descriptionQuery->fetch();

    $stockQuery = $db->prepare('SELECT stock FROM produit WHERE idProduit = :idProduit');
    $stockQuery->execute(['idProduit' => $idProduit]);
    $stock = $stockQuery->fetch();

    $prixQuery = $db->prepare('SELECT prix FROM produit WHERE idProduit = :idProduit');
    $prixQuery->execute(['idProduit' => $idProduit]);
    $prix = $prixQuery->fetch();

    $idPromoQuery = $db->prepare("SELECT idPromo FROM produit WHERE idProduit = :idProduit");
    $idPromoQuery->execute(['idProduit' => $idProduit]);
    $idPromo = $idPromoQuery->fetch();

    $txPromoQuery = $db->prepare("SELECT txPromo FROM produit WHERE idProduit = :idProduit");
    $txPromoQuery->execute(['idProduit' => $idProduit]);
    $txPromo = $txPromoQuery->fetch();

    $photoQuery = $db->prepare("SELECT photo FROM produit WHERE idProduit = :idProduit");
    $photoQuery->execute(['idProduit' => $idProduit]);
    $photo = $photoQuery->fetch();




    if($idPromo != 2){
        $nouvPrix['prix'] = $prix['prix'] * (1-($txPromo['txPromo']));
    }

?>
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
            <a href="#product" class="delivery-link">
                <span class="scroll-text" data-text="Scroll">Scroll</span>
                <i class="scroll-icon fas fa-angle-down"></i>
            </a>
        </div>
    </section>
    
    <section id="product" class="product-container">
        <div class="product-tab">
            <div class="img-product"> 
                <h1 class="section-title"><?php echo $nom['nomProduit']; ?></h1>


                <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($photo['photo']).'" height="650"  width="500" />';?>
            </div>

            <div class="product-text">
                <h2 class="pros">
                    Description du produit :
                </h2>



                
                <div class="text">
                    <p>
                        <?php echo $description['description']; ?>
                    </p>

                    <br>
                    <p>
                        Nombre d'articles en stock : <?php echo $stock['stock']; ?>
                    </p>
                    <br>
                    <p>
                        <b><?php if($idPromo != 2){echo "Produit en promotion : " . $txPromo['txPromo'] * 100 . "%"; echo "<br>"; echo "Prix original : " . $prix['prix'] . "€";
                            }
                            ?>

                        </b>
                    </p>
                </div>


            </div>
            <div class="plant-price-column">
                <div class="plant-price-box">
                    <div class="plant-price-box2">
                        <p class="price-tag">
                            <?php if($idPromo != 2) {
                                echo  $nouvPrix['prix'] . "€";
                            } else {
                                echo  $prix['prix'] . "€";
                            }?>

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