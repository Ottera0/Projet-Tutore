<?php 
    include 'database.php';
    global $db;


    if(isset($_POST['connexion'])){
        
        extract($_POST);

        if(!empty($Cemail) && !empty($Cpassword)){

            $q = $db->prepare("SELECT * FROM client WHERE email = :email");
            $q->execute(['email' => $Cemail]);
            $result = $q->fetch();

            if($result == true){
                //le compte existe

                if(password_verify($Cpassword, $result['passwordC'])){
                    echo "Vous etes maintenant connecte.";

                    $_SESSION['prenom'] = $result['prenom'];
                    $_SESSION['nom'] = $result['nom'];
                    $_SESSION['email'] = $result['email'];

                }
                else{
                    echo "Votre mot de passe est incorrect !";
                }
            }
            else{
                echo "Le compte avec l'email " . $Cemail ." n'existe pas";
            }
        }
        else {echo "Veuillez remplir les champs";
        }
    }

?>