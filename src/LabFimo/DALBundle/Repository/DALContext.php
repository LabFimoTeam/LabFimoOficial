<?php

namespace LabFimo\DALBundle\Repository;

use Doctrine\ORM\EntityRepository;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DALContext
 *
 * @author Erik Villegas
 */
class DALContext extends EntityRepository {

    /**
     * Gestor del entityManager
     * 
     * @author Erik Villegas
     * 
     * @param type $Repositorio
     * @return Repositorio solicitado
     */
    public static function GetDALManager($Repositorio) {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository($Repositorio);

        return $repo;
    }

}
