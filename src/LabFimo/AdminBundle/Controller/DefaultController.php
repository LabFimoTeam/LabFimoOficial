<?php

namespace LabFimo\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
//        $x = $this->get("DALServices");
//        $y = $x.GetRepositorio("BrigadaRepository");
//        print_r ($y);
        return $this->render('LabFimoAdminBundle:Default:index.html.twig');
    }
}
