<?php
// src/shopBundle/DataFixtures/ORM/FixturesBundle.php
namespace shopBundle\DataFixtures\ORM;

use shopBundle\Entity\produits;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;


class ProduitsData extends Fixture  implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        
        
            $P1 = new produits();
            $P1->setNom('HTML5');
            $P1->setDescription('HTML5 est la dernière révision majeure du HTML.');
            $P1->setPrix('150');
            $P1->setDisponible('1');
            $P1->setImage($this->getReference('media1'));
            $P1->setCategorie($this->getReference('categorie1'));
            
            $manager->persist($P1);

          

            $P3 = new produits();
            $P3->setNom('JavaScript');
            $P3->setDescription('JavaScript est un langage de programmation de scripts');
            $P3->setPrix('120');
            $P3->setDisponible('1');
            $P3->setImage($this->getReference('media3'));
            $P3->setCategorie($this->getReference('categorie1'));
            
            $manager->persist($P3);  

             $P2 = new produits();
            $P2->setNom('CSS3');
            $P2->setDescription('Les feuilles de style en cascade');
            $P2->setPrix('100');
            $P2->setDisponible('0');
            $P2->setImage($this->getReference('media2'));
            $P2->setCategorie($this->getReference('categorie1'));
            
            $manager->persist($P2);
  

            $P5 = new produits();
            $P5->setNom('Illustrator');
            $P5->setDescription('Adobe Illustrator est un logiciel de création graphique vectorielle');
            $P5->setPrix('200');
            $P5->setDisponible('0');
            $P5->setImage($this->getReference('media5'));
            $P5->setCategorie($this->getReference('categorie2'));
            
            $manager->persist($P5);

            $P6 = new produits();
            $P6->setNom('Adobe Premiere');
            $P6->setDescription('Adobe Premiere Pro, anciennement appelé Adobe Premiere,');
            $P6->setPrix('200');
            $P6->setDisponible('0');
            $P6->setImage($this->getReference('media6'));
            $P6->setCategorie($this->getReference('categorie2'));
            
            $manager->persist($P6);
       


            $P4 = new produits();
            $P4->setNom('Photoshop');
            $P4->setDescription('Photoshop est un logiciel de retouche, de traitement et de dessin assisté par ordinateur');
            $P4->setPrix('200');
            $P4->setDisponible('1');
            $P4->setImage($this->getReference('media4'));
            $P4->setCategorie($this->getReference('categorie2'));
            
            $manager->persist($P4); 
           $P7 = new produits();
            $P7->setNom('Symfony');
            $P7->setDescription('Symfony est un ensemble de composants PHP ');
            $P7->setPrix('400');
            $P7->setDisponible('0');
            $P7->setImage($this->getReference('media7'));
           $P7->setCategorie($this->getReference('categorie1'));
           
            $manager->persist($P7);
            

            $P8 = new produits();
            $P8->setNom('CCNA');
            $P8->setDescription('Cisco Certified Network Associate (CCNA®) ');
            $P8->setPrix('400');
            $P8->setDisponible('0');
            $P8->setImage($this->getReference('media8'));
           $P8->setCategorie($this->getReference('categorie3'));
           
            $manager->persist($P8);

            $P9 = new produits();
            $P9->setNom('CCNP');
            $P9->setDescription('Cisco Certified Network Professional (CCNP®) ');
            $P9->setPrix('400');
            $P9->setDisponible('0');
            $P9->setImage($this->getReference('media9'));
           $P9->setCategorie($this->getReference('categorie3'));
           
            $manager->persist($P9);
            $P10 = new produits();
             $P10->setNom('LINUX');
             $P10->setDescription('Système d\'exploitation libre');
             $P10->setPrix('400');
             $P10->setDisponible('0');
             $P10->setImage($this->getReference('media10'));
            $P10->setCategorie($this->getReference('categorie4'));
           
            $manager->persist( $P10);
            $manager->flush();
       
        
    }
         public function getOrder(){
                return 2;
            }

    public function getDependencies()
    {
        return array(MediaData::class,categoriesData::class);
         
    }
  
    
}