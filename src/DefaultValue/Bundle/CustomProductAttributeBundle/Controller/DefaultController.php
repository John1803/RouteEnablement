<?php

namespace DefaultValue\Bundle\CustomProductAttributeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DefaultValueCustomProductAttributeBundle:Default:index.html.twig', array('name' => $name));
    }
}
