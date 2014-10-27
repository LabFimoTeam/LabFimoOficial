<?php

namespace LabFimo\StudentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LabFimoStudentBundle:Default:index.html.twig');
    }
}
