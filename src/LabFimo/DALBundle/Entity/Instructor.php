<?php

namespace LabFimo\DALBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Instructor
 *
 * @ORM\Table()
 * @ORM\Entity* @ORM\Entity(repositoryClass="LabFimo\DALBundle\Repository\InstructorRepository")
 */
class Instructor {

    public function __construct() {
        $this->brigadas = new ArrayCollection();
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="numeroEmpleado", type="integer")
     */
    private $numeroEmpleado;

    /**
     * @ORM\OneToOne(targetEntity="LabFimo\SecurityBundle\Entity\Usuario")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity="Brigada", mappedBy="instructor")
     * */
    private $brigadas;

}
