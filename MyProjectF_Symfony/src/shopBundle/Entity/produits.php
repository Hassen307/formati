<?php

namespace shopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * produits
 *
 * @ORM\Table(name="produits")
 * @ORM\Entity(repositoryClass="shopBundle\Repository\produitsRepository")
 */
class produits
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var bool
     *
     * @ORM\Column(name="disponible", type="boolean")
     */
    private $disponible;
    /** 
      * @ORM\OneToOne(targetEntity="shopBundle\Entity\media",cascade={"persist","remove"}) 
      *
      */ 
        private $image;
    /** 
      * @ORM\ManyToOne(targetEntity="shopBundle\Entity\categories",inversedBy="produits",cascade={"persist","remove"}) 
      * @ORM\JoinColumn(nullable=false)
      */ 
        private $categorie;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return produits
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return produits
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return produits
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set disponible
     *
     * @param boolean $disponible
     *
     * @return produits
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return bool
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set image
     *
     * @param \shopBundle\Entity\media $image
     *
     * @return produits
     */
    public function setImage(\shopBundle\Entity\media $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \shopBundle\Entity\media
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set categorie
     *
     * @param \shopBundle\Entity\categories $categorie
     *
     * @return produits
     */
    public function setCategorie(\shopBundle\Entity\categories $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \shopBundle\Entity\categories
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
