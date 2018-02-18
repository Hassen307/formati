<?php
// src/shopBundle/DataFixtures/ORM/FixturesBundle.php
namespace shopBundle\DataFixtures\ORM;

use shopBundle\Entity\media;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MediaData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        
            $media1 = new media();
            $media1->setPath('https://www.w3.org/html/logo/downloads/HTML5_Logo_512.png');
            $media1->setAlt('HTML5');
            $manager->persist($media1);


            $media2 = new media();
            $media2->setPath('https://www.onlinedesignclub.com/wp-content/uploads/2015/12/css3.png');
            $media2->setAlt('CSS3');
            $manager->persist($media2);

            $media3 = new media();
            $media3->setPath('https://upload.wikimedia.org/wikipedia/commons/d/dc/Javascript-shield.png');
            $media3->setAlt('JavaScript');
            $manager->persist($media3);

            $media4 = new media();
            $media4->setPath('https://cdn.worldvectorlogo.com/logos/photoshop-cc.svg');
            $media4->setAlt('Photoshop');
            $manager->persist($media4);

            $media5 = new media();
            $media5->setPath('https://cdn.worldvectorlogo.com/logos/adobe-illustrator-cc.svg');
            $media5->setAlt('Illustrator');
            $manager->persist($media5);

            $media6 = new media();
            $media6->setPath('https://cdn.worldvectorlogo.com/logos/premiere-cc.svg');
            $media6->setAlt('Adobe Premiere');
            $manager->persist($media6);

            $media7 = new media();
            $media7->setPath('https://symfony.com/images/v5/pictos/home-main-illu.svg');
            $media7->setAlt('Symfony');
            $manager->persist($media7);

              $media8 = new media();
            $media8->setPath('https://learning.nil.com/assets/News/2016/New-CCNA-Routing-and-Switching-Certification-v3.0.jpg');
            $media8->setAlt('CCNA');
            $manager->persist($media8);

              $media9 = new media();
            $media9->setPath('http://imedita.com/blog/wp-content/uploads/2016/06/ccnp.jpg');
            $media9->setAlt('CCNP');
            $manager->persist($media9);

              $media10 = new media();
            $media10->setPath('http://blog.ducatillon.net/wp-content/uploads/2010/12/linux_pingouin.png');
            $media10->setAlt('LINUX');
            $manager->persist($media10);
        

        $manager->flush();
        
        $this->addReference('media1',$media1);
        $this->addReference('media2',$media2);
        $this->addReference('media3',$media3);
        $this->addReference('media4',$media4);
        $this->addReference('media5',$media5);
        $this->addReference('media6',$media6);
        $this->addReference('media7',$media7);
        $this->addReference('media8',$media8);
        $this->addReference('media9',$media9);
        $this->addReference('media10',$media10);
    }
         public function getOrder(){
                return 3;
            }
  
}