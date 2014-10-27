<?php

namespace LabFimo\SecurityBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class Usuario Extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    public function __construct()
    {
        // Mantener esta línea para llamar al constructor
        // de la clase padre
        parent::__construct();

        // Aquí podremos añadir el código necesario.
    }
    
    /**
     * Agrega un rol al usuario.
     * @throws Exception
     * @param Rol $rol 
     */
    public function addRole( $rol )
    {
	if($rol == 1) {
	  array_push($this->roles, 'ROLE_ADMIN');
	}
	else if($rol == 2) {
	  array_push($this->roles, 'ROLE_USER');
	}
    }
}