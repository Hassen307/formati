<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 20/01/2018
 * Time: 11:01
 */
namespace Firme\Commercial;
class Personne{
    private $prenom;
    private $nom;
    private $cin;

    /**
     * Personne constructor.
     * @param $prenom
     * @param $nom
     * @param $cin
     */
    public function __construct($prenom, $nom, $cin)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->cin = $cin;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
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
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

}