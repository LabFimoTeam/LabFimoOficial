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
//    public static function GetDALManagerWitRepository($Repositorio) {
//        $em = $this->getDoctrine()->getManager();
//        $repoString = "DALBundle:"+$Repositorio;
//        $repo = $em->getRepository($repoString);
//
//        return $repo;
//    }
//    
//    public function GetDALManager(){
//        return $this->getDoctrine()->getManager();
//    }
    
    public function GetManager() {
        return parent::getEntityManager(); 
    }
}
