<?php

namespace LabFimo\DALBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LabFimo\DALBundle\Entity;

class DALController extends Controller
{
    public function GetRepositorio($Repositorio) {
        $em->$this->getDoctrine()->getManager();
        $x = $em->getRepository($Repositorio);
        return $x;
    }
}