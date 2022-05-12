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
            <a href="#details" class="delivery-link">
                <span class="scroll-text" data-text="Scroll">Scroll</span>
                <i class="scroll-icon fas fa-angle-down"></i>
            </a>
        </div>
    </section>

    <section id="details" class="details">
        <h1 class="section-title">Details techniques</h1>
            <h2>Contexte</h2>

            <p>
                Ce site a été réalisé dans le cadre d'un projet d'études. C'est uniquement une maquette en l'état.<br>
                Nos contraintes étaient d'utiliser uniquement du HTML & CSS pour la réalisation du site. <br>

            </p>

            <h2>Organisation</h2>

            <p>
                Tout d'abord, le dossier se compose de 7 pages HTML :
            </p>
            <ul class="description">
                <li>
                    Page d'accueil avec promotions.
                </li>
                <li>
                    Page avec tous les produits.
                </li>
                <li>
                    Une page de description d'un produit avec la possibilité de l'ajouter au panier.
                </li>
                <li>
                    La page du panier avec 2 articles, le sous-total par article, puis le prix de la commande.
                </li>
                <li>
                    Une page de remerciement après achat, donnant la possibilité de retourner a l'accueil.
                </li>
                <li>
                    Une page de présentation du site (créateur / magasin)
                </li>
                <li>
                    Cette meme page donnant des détails techniques sur la réalisation de la maquette
                </li>
            </ul>
            <p>
                Et également d'une seule page de style CSS rassemblant tout.
            </p>

            <h2>Header</h2>
            <p>
                Ensuite, toutes les pages ont le meme header, il prend 100% de l'ecran quand on arrive sur une nouvelle page, il est composé de plusieurs éléments : <br>
            </p>
            <ul class="description">
                <li>
                    Il y a le logo en haut a gauche, qui sert également de bouton vers l'accueil.
                </li>
                <li>
                    Une barre de navigation en ligne sur un grand écran a droite du logo, qui passe en colonne sur la droite de l'écran quand il est plus petit.
                </li>
                <li>
                    Un fond d'écran qui couvre toute la surface du header.
                </li>
                <li>
                    Enfin, en bas du header, on retrouve un petit bouton "Scroll" qui permet de descendre jusqu'au contenu de la page en-dessous.
                </li>
            </ul>

            <h2>Footer</h2>
            <p>
                Toutes les pages contiennent le meme footer, qui contient le nom du site ainsi qu'un lien vers la page "Qui sommes-nous ?".
            </p>

            <h2>Page Accueil et Produits</h2>
            
            <p class="details-text">
                Bien que ces deux pages aient une structure similaire et partagent la meme pate graphique, elles sont réalisées de deux manières différentes.<br><br>
                Pour ce qui est de la page d'accueil, les icones et textes pour les livraisons sont disposés grace a un display: flex permettant répartir équitablement les icones a l'horizontal.<br>
                Elles basculeront en colonnes lorsque l'écran sera trop petit pour les contenir.<br>
                Les plantes en promotion elles, sont uniquement des boutons aussi répartis en display:flex avec un wrap permettant de renvoyer en dessous quand elles dépassent.<br>
                Ces boutons sont dimensionnés par l'image des plantes qui est ajoutée en background a chacun de ces boutons.<br><br>
            </p>

            <p class="details-text">
                Quant a la page des produits, le système de bouton avec background est le meme, mais ici les images sont placées en utilisant un display: grid.
            </p>
            <h2>Description produit</h2>

            <p class="details-text">
                Il y a donc une page de description de plante, vers laquelle n'importe quel choix de plante renvoie.<br>
                Cette page est composée de 3 colonnes, une image de la plante, une description, puis le prix unitaire avec les options de livraisons et la possibilité d'ajout au panier<br>
                La disposition est un display: flex en row, permettant sur grand écran d'avoir tout sur une ligne.<br>
                Puis quand la taille de l'ecran ne suffit plus a contenir en ligne, la page passe en flex colonne, ce qui correspond plus a un usage téléphone.<br>
            </p>

            <h2>Panier</h2>
            
            <p class="details-text">
                Une fois votre plante préféré ajoutée au panier, vous etes renvoyé vers ce dernier, ou se trouvent deux articles et le total du panier.<br>
                En utilisant un display: flex en colonne, on a une interface facile d'utilisation, que ce soit sur téléphone ou ordinateur.<br>
                Pour chaque produit, en utilisant un tableau, on a la possibilité de modifier la quantité, ou bien retirer l'article du panier (non fonctionnel bien sur) et un affichage du sous-total par article<br>
                Tout en bas, on a la somme des prix des produits, le prix de livraison, ainsi que le total du panier.<br>
            </p>

            <h2>Esthetique</h2>

            <p class="details-text">
                L'idée principale est d'obtenir un site épuré et minimaliste, avec quelques détails comme la barre de navigation ou bien les "transform" sur les boutons.<br>
                L'entièreté du site est fonctionelle sur ordinateur comme sur téléphone, ou bien tablette.<br>
            </p>
    </section>
    
    <footer id="footer" class="footer">
        <span class="copyright">&copy; 2022 - Jardin de Gaïa </span>
        <a href="qui_sommes_nous.php" class="team">Qui Sommes-nous ?</a>
    </footer>