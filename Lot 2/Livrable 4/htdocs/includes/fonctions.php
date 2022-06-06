<?php

//Fonctions avec requêtes préparées pour afficher les produits/promos

require('database.php');
function categorie()
{
    global $db;
        $q = $db->prepare("SELECT * FROM categorie");

        $q->execute();

        $result = $q->fetchAll(PDO::FETCH_OBJ);

        return $result;

        $q->closeCursor();
}

function afficher(){
    global $db;
        $req = $db->prepare("SELECT * FROM produit ORDER BY idProduit DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();



}

function afficherPromo(){
    global $db;
        $req = $db->prepare("SELECT * FROM produit WHERE idPromo != 2 ORDER BY idProduit DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();

}

function produitsCat($idCategorie){
    global $db;
        $req = $db->prepare("SELECT * FROM produit WHERE idCat = :idCat");

        $req->execute(['idCat' => $idCategorie]);

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
}

?>