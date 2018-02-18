<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 21/01/2018
 * Time: 11:33
 */
namespace controlleur\ajouteControlleur;
use model\produit\Produit;

include '../model/produit.php';
if($_POST) {
    if ($_POST['admin'] == 'ajou') {
        $nom = $_POST['nom'];
        $prix = $_POST['prix'];
        $quantite = $_POST['quantite'];
        $obj = new Produit();
        $obj->ajouteProduit($nom, $prix, $quantite);
    } else {
        echo 'erreur';
    }
}


