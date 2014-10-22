<?php

namespace LabFimo\DALBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enrrol
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Enrrol
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
     * @ORM\Column(name="mesaAsignada", type="integer")
     */
    private $mesaAsignada;

    /**
     * @var boolean
     *
     * @ORM\Column(name="asistencia", type="boolean")
     */
    private $asistencia;


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
     * Set mesaAsignada
     *
     * @param integer $mesaAsignada
     * @return Enrrol
     */
    public function setMesaAsignada($mesaAsignada)
    {
        $this->mesaAsignada = $mesaAsignada;

        return $this;
    }

    /**
     * Get mesaAsignada
     *
     * @return integer 
     */
    public function getMesaAsignada()
    {
        return $this->mesaAsignada;
    }

    /**
     * Set asistencia
     *
     * @param boolean $asistencia
     * @return Enrrol
     */
    public function setAsistencia($asistencia)
    {
        $this->asistencia = $asistencia;

        return $this;
    }

    /**
     * Get asistencia
     *
     * @return boolean 
     */
    public function getAsistencia()
    {
        return $this->asistencia;
    }
}
