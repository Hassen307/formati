<?php

namespace shopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="home")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('shopBundle:produits')->findAll();
        
        return $this->render('@shop/Default/index.html.twig', array('produits' => $produits));
        
        
    }
    /**
     * @Route("/blogsingle",name="blogsingle")
     */
    public function blogAction()
    {
        return $this->render('@shop/Default/blogsingle.html.twig');
    }
    /**
     * @Route("/blog",name="blog")
     */
    public function blogsingleAction()
    {
        return $this->render('@shop/Default/blog.html.twig');
    }
    /**
     * @Route("/contact",name="contact")
     */
    public function contactAction()
    {
        return $this->render('@shop/Default/contact.html.twig');
    }
    /**
     * @Route("/login2",name="login")
     */
    public function loginAction()
    {
        return $this->render('@user/layoutlogin.html.twig');
    }
    /**
     * @Route("/produit",name="produit")
     */
    public function produitAction()
    {
        return $this->render('@shop/Default/produit.html.twig');
    }
    
     /**
     * @Route("/cart",name="cart")
     */
    public function cartAction()
    {
        return $this->render('@shop/Default/cart.html.twig');
    }
    
}
