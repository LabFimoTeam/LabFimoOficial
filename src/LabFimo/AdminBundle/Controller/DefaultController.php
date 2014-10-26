<?php

namespace LabFimo\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LabFimoAdminBundle:Default:index.html.twig');
    }
}
