<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 21/01/2018
 * Time: 11:25
 */
namespace model\produit;
use PDO;

class Produit {
    private $nom;
    private $prix;
    private $quantite;

    /**
     * Produit constructor.
     * @param $nom
     * @param $prix
     * @param $quantite
     */
    public function __construct()
    {

        $this->nom = "";
        $this->prix = "";
        $this->quantite = "";

    }
    function dbConnect()
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=has1', 'root', '');
            return $bdd;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }
    public function getProduit(){
        $bdd=$this->dbConnect();
        $req = $bdd->query('SELECT id, nom, prix, quantite FROM produit ORDER BY id');

        return $req;
    }
    public function ajouteProduit($nom,$prix,$quantite){
        $bdd = $this->dbConnect();

        $req=$bdd->prepare('INSERT INTO produit(nom, prix, quantite) VALUES(?,?,?)');
        if (isset($_POST['nom'])&& isset($_POST['prix']) && isset($_POST['quantite'])){
        $req->execute(array($_POST['nom'],$_POST['prix'],$_POST['quantite']));
        echo 'Produit à été ajouté';
        }


    }
    public function deleteProduit($id){
        $bdd=$this->dbConnect();
        $sql = "DELETE FROM `produit` WHERE `id` = :id";
        $statement = $bdd->prepare($sql);
        $statement->bindValue(':id', $id);
        $delete = $statement->execute();
        echo "le produit ayant id=$id a été suprrimé";

    }






}