<?php

namespace AgIm\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AgImAgenceBundle:Default:index.html.twig', array('name' => $name));
    }
}
