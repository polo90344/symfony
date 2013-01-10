<?php

namespace zmb\dkqueryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('zmbdkqueryBundle:Default:index.html.twig', array('name' => $name));
    }
}
