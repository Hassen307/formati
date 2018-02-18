<?php

namespace shopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class categoriesController extends Controller
{	
    /**
     * @Route("/menu",name="menu")
     */
    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('shopBundle:categories')->findAll();
        
        return $this->render('@shop/Default/categories/menu.html.twig', array('categories' => $categories));
    }

}