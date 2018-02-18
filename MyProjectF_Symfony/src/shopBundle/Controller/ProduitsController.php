<?php

namespace shopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class ProduitsController extends Controller

{    
    /**
     * @Route("/shop",name="shop")
     */
    public function shopAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('shopBundle:produits')->findAll();
        
        return $this->render('@shop/Default/produits/shop.html.twig', array('produits' => $produits));
        
    }
    /**
     * @Route("/produitscat/{categorie}",name="produitscat")
     */
    public function CatproduitsAction($categorie)
    {
     $em = $this->getDoctrine()->getManager();
         $produits = $em->getRepository('shopBundle:produits')->byCategorie($categorie);
      
        return $this->render('@shop/Default/produits/shop.html.twig',array('produits' => $produits));
        
    }
    /**
     * @Route("/produit/{id}",name="presentation")
     */
    public function presentationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
         $produit = $em->getRepository('shopBundle:produits')->find($id);
        return $this->render('@shop/Default/produits/produit.html.twig',array('produit' => $produit));
    }
}