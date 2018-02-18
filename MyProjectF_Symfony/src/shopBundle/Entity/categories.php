<?php

namespace shopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="shopBundle\Repository\categoriesRepository")
 */
class categories 
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    /** 
      * @ORM\OneToOne(targetEntity="shopBundle\Entity\media",cascade={"persist","remove"}) 
        * 
      */ 
        private $image;

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
     * Set id
     *
     * @param int $id
     *
     * @return id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return categories
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
     * Set image
     *
     * @param \shopBundle\Entity\media $image
     *
     * @return categories
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
}
