<?php

namespace LabFimo\DALBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanDeEstudios
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PlanDeEstudios
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
     * @ORM\Column(name="clavePlan", type="integer")
     */
    private $clavePlan;

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
     * Set clavePlan
     *
     * @param integer $clavePlan
     * @return PlanDeEstudios
     */
    public function setClavePlan($clavePlan)
    {
        $this->clavePlan = $clavePlan;

        return $this;
    }

    /**
     * Get clavePlan
     *
     * @return integer 
     */
    public function getClavePlan()
    {
        return $this->clavePlan;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return PlanDeEstudios
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
