<?php

namespace LabFimo\DALBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClaveClase
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ClaveClase
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
     * @var string
     *
     * @ORM\Column(name="claveClase", type="string", length=20)
     */
    private $claveClase;

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
     * Set claveClase
     *
     * @param string $claveClase
     * @return ClaveClase
     */
    public function setClaveClase($claveClase)
    {
        $this->claveClase = $claveClase;

        return $this;
    }

    /**
     * Get claveClase
     *
     * @return string 
     */
    public function getClaveClase()
    {
        return $this->claveClase;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return ClaveClase
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
