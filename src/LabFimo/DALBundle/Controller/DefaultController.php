<?php

namespace LabFimo\DALBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LabFimoDALBundle:Default:index.html.twig', array('name' => $name));
    }
}
