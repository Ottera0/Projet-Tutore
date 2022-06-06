<?php session_start(); ?> 
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

    <section  class="connexion">
        <h1 class="section-title">Connexion</h1>
        <div class="form-connexion">
            <div>
                <p>Cliquez <a href="inscription.php" class="">ici</a> pour creer votre compte.</p></br>
                <?php
                    if(isset($_SESSION['prenom']) && (isset($_SESSION['nom']))){
                        ?>
                        <p> Vous etes connecte avec le compte : </p></br>
                        <p> Prenom : <?= $_SESSION['prenom']; ?> </p></br>
                        <p> Nom : <?= $_SESSION['nom']; ?> </p></br>
                        <p> Email : <?= $_SESSION['email']; ?> </p></br>

                        <?php
                    }
                    else{
                        echo "Sinon, veuillez vous connecter a votre compte";
                    }
                ?>
            </div>
            <div>
                <form id="form-co" method="post">
                    <label><b>Email</b></label><br>
                    <input type="email" name="Cemail" id="Cemail" placeholder="exemple@gmail.com" required><br>
                    <label><b>Mot de passe</b></label><br>
                    <input type="password" name="Cpassword" id="Cpassword" placeholder="password" required><br>
                    <input type="submit" name="connexion" id="connexion" value ="Connexion">
                </form>
            </div>
        </div>
    <?php
        include 'includes/login.php';
    ?>

    </section>

    
    <footer id="footer" class="footer">
        <span class="copyright">&copy; 2022 - Jardin de Gaïa </span>
        <a href="qui_sommes_nous.php" class="team">Qui Sommes-nous ?</a>
    </footer>