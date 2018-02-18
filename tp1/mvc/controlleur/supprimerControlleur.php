<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 26/01/2018
 * Time: 00:03
 */
namespace controlleur\supprimerControlleur;
use model\produit\Produit;

include '../model/produit.php';
$obj=new Produit();
$id=$_POST['id'];
if(isset($_POST['del'])) {
    if ($_POST['del'] == 'supp') {

        $obj->deleteProduit($id);
    }
}