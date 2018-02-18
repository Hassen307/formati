<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 25/01/2018
 * Time: 21:16
 */

namespace controlleur\listeControlleur;
use model\produit\Produit;

include '../model/produit.php';
$obj=new Produit();

$req = $obj->getProduit();


require('../view/listProduit.php');

