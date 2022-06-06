<?php
include 'includes/fonctions.php';

$idCategorie = $_GET['idCat'];
$Produits=produitsCat($idCategorie);


$nomCatQuery = $db->prepare("SELECT nomCat FROM categorie WHERE idCat = :idCategorie");
$nomCatQuery->execute(['idCategorie' => $idCategorie]);
$nomCat = $nomCatQuery->fetch();

?>

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
        <a href="#plants" class="delivery-link">
            <span class="scroll-text" data-text="Scroll">Scroll</span>
            <i class="scroll-icon fas fa-angle-down"></i>
        </a>
    </div>
</section>

<section id="plants" class="plants-container">
    <h1 class="section-title">Nos plantes</h1>
    <h2> <?php echo $nomCat['nomCat'] ?> </h2>


    <?php foreach($Produits as $produit):?>
        <div class="article">
            <?php $idProduit = $produit->idProduit;
            //Verification produit en promotion
            if($produit->idPromo != null){
                $nouvPrix = $produit->prix * (1-($produit->txPromo));
            }
            ?>

            <div class="article-description">
                <div class="article-image">
                    <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($produit->photo).'" height="300" width ="300" />';?>
                </div>
                <div class="article-info">
                    <h2 class="article-name">
                        <?= $produit->nomProduit ?>
                    </h2>
                    <p class="article-unit-price">
                        <?= $produit->description ?> </br>

                    </p>
                    <button class="acheter-button"><a class="produit-lien" href="description_plante.php?id=<?php echo $idProduit?>">Acheter</a></button>



                </div>

            </div>
            <div class="article-total">
                <p>
                    <?php if($produit->idPromo != 2){
                        echo "Article en promotion : " . $produit->txPromo * 100 . " % " . "  Prix reduit : " . $nouvPrix . "€";
                    }else{
                        echo "Prix unitaire : " . $produit->prix . "€";
                    } ?>
                </p>
            </div>
        </div>
    <?php endforeach ?>




</section>

<footer id="footer" class="footer">
    <span class="copyright">&copy; 2022 - Jardin de Gaïa </span>
    <a href="qui_sommes_nous.php" class="team">Qui Sommes-nous ?</a>
</footer>
