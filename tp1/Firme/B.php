<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 20/01/2018
 * Time: 11:05
 */
namespace Firme\B;
require "Client.php";
require "Commercial.php";
use Firme\Client;
$x1=new Client\Personne("hassen","benabdelhafidh","1234");
$x2=new Client\Personne("gcr","enig","5555");
use Firme\Commercial;
$x3=new Commercial\Personne("vendeur","produit","2018");
echo $x1->getNom()."<br>";
echo $x3->getCin();