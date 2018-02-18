<?php

namespace userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/usertwig")
     */
    public function indexAction()
    {
        return $this->render('@user/Default/index.html.twig');
    }
}
