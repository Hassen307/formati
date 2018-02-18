<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 14/01/2018
 * Time: 11:18
 */
abstract class Personne{
    protected $nom;
    protected $prenom;
    public function __construct($nom,$prenom)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
    }
}
class Client extends Personne{
    private $adresse;
    public function __construct($nom, $prenom, $adresse)
    {
        parent::__construct($nom, $prenom);
        $this->adresse=$adresse;
    }

    public function setcoord($nom,$prenom,$adresse){
        echo "nom= ".$this->nom." prénom= ".$this->prenom." adresse= ".$this->adresse;
    }
}

class Electeur extends Personne{
    private $bureau_de_vote;
    private $vote;
    public function __construct($nom, $prenom, $bureau_de_vote)
    {
        parent::__construct($nom, $prenom);
        $this->bureau_de_vote=$bureau_de_vote;
        $this->vote="non";
    }
    public function avoter(){
        $this->vote="oui";
    }
}

$x1=new Electeur("benabdelhafidh","hassen","tunis");
$x1->avoter();
var_dump($x1);

