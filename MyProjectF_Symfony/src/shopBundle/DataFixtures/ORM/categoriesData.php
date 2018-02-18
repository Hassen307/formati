<?php
// src/shopBundle/DataFixtures/ORM/FixturesBundle.php
namespace shopBundle\DataFixtures\ORM;

use shopBundle\Entity\categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class categoriesData extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        
        
            $categorie1 = new categories();
            $categorie1->setId('1');
            $categorie1->setImage($this->getReference('media6'));
            $categorie1->setNom('Développement web');
            $manager->persist($categorie1);

            $categorie2 = new categories();
            $categorie2->setId('2');
            $categorie2->setImage($this->getReference('media7'));
            $categorie2->setNom('Design graphique');
            $manager->persist($categorie2);

            $categorie3 = new categories();
            $categorie3->setId('3');
            $categorie3->setImage($this->getReference('media8'));
            $categorie3->setNom('Cisco');
            $manager->persist($categorie3);

            $categorie4 = new categories();
            $categorie4->setId('4');
            $categorie4->setImage($this->getReference('media10'));
            $categorie4->setNom('Linux ');
            $manager->persist($categorie4);
            
            
            $manager->flush();
            
            $this->addReference('categorie1',$categorie1);
            $this->addReference('categorie2',$categorie2);
            $this->addReference('categorie3',$categorie3);
            $this->addReference('categorie4',$categorie4);  
        
    }
     public function getOrder(){
                return 1;
            }

    public function getDependencies()
    {
        return array(MediaData::class);
    }
    
}