<?php

namespace LabFimo\DALBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Instructor
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Instructor
{
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
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numeroEmpleado
     *
     * @param integer $numeroEmpleado
     * @return Instructor
     */
    public function setNumeroEmpleado($numeroEmpleado)
    {
        $this->numeroEmpleado = $numeroEmpleado;

        return $this;
    }

    /**
     * Get numeroEmpleado
     *
     * @return integer 
     */
    public function getNumeroEmpleado()
    {
        return $this->numeroEmpleado;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Instructor
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
