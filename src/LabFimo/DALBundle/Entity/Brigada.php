<?php

namespace LabFimo\DALBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brigada
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Brigada
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
     * @ORM\Column(name="claveBrigada", type="text")
     */
    private $claveBrigada;

    /**
     * @var string
     *
     * @ORM\Column(name="claveClase", type="text")
     */
    private $claveClase;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inicio", type="time")
     */
    private $inicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="time")
     */
    private $fin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponible", type="boolean")
     */
    private $disponible;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarios", type="text")
     */
    private $comentarios;

    /**
     * @var integer
     *
     * @ORM\Column(name="plan", type="integer")
     */
    private $plan;


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
     * Set claveBrigada
     *
     * @param string $claveBrigada
     * @return Brigada
     */
    public function setClaveBrigada($claveBrigada)
    {
        $this->claveBrigada = $claveBrigada;

        return $this;
    }

    /**
     * Get claveBrigada
     *
     * @return string 
     */
    public function getClaveBrigada()
    {
        return $this->claveBrigada;
    }

    /**
     * Set claveClase
     *
     * @param string $claveClase
     * @return Brigada
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
     * Set inicio
     *
     * @param \DateTime $inicio
     * @return Brigada
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get inicio
     *
     * @return \DateTime 
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     * @return Brigada
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime 
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set disponible
     *
     * @param boolean $disponible
     * @return Brigada
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return boolean 
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Brigada
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

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return Brigada
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set plan
     *
     * @param integer $plan
     * @return Brigada
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * Get plan
     *
     * @return integer 
     */
    public function getPlan()
    {
        return $this->plan;
    }
}
