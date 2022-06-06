<?php

        if(isset($_POST['formsend'])){
            // $nom = $_POST['nom'];
            // $prenom = $_POST['prenom'];
            // $email = $_POST['email'];
            // $password = $_POST['password'];
            // $adresse = $_POST['adresse'];
            // $codePostal = $_POST['codePostal'];
            // $ville = $_POST['ville'];
            // $pays = $_POST['pays'];
            // $numTel = $_POST['numTel'];

            extract($_POST);

            if(!empty($nom) && !empty($prenom) && !empty($email) && !empty($password) && !empty($adresse) && !empty($codePostal) && !empty($ville) && !empty($pays) && !empty($numTel)){

                $options = [ 'cost' => 12,];
                $passwordC = password_hash($password, PASSWORD_BCRYPT, $options);

                include 'database.php';
                global $db;
        

                $c = $db->prepare("SELECT email from client where email = :email");
                $c->execute(['email' => $email]);

                $result = $c->rowcount();

                if ($result == 0){
                
                    $q = $db->prepare("INSERT into client(nom, prenom, email, adresse, codePostal, ville, pays, numTel, passwordC) VALUES(:nom, :prenom, :email, :adresse, :codePostal, :ville, :pays, :numTel, :passwordC) ");
                    $q->execute([
                        'nom' => $nom,
                        'prenom' => $prenom,
                        'email' => $email,
                        'adresse' => $adresse,
                        'codePostal' => $codePostal,
                        'ville' => $ville,
                        'pays' => $pays,
                        'numTel' => $numTel,
                        'passwordC' => $passwordC
                    ]);
                    echo "Le compte a bien ete cree";
                }
                else{
                    echo "Un compte existe deja avec cet email, veuillez vous connecter ou entrer un autre email";
                }

                
            }
            
        }
        
        ?>