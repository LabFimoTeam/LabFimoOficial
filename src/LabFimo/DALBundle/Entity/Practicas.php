<?php

namespace LabFimo\DALBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Practicas
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LabFimo\DALBundle\Entity\PracticasRepository")
 */
class Practicas
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
     * @ORM\Column(name="clavePractica", type="integer")
     */
    private $clavePractica;

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
     * @ORM\Column(name="mesasDisponibles", type="integer")
     */
    private $mesasDisponibles;

    /**
     * @var integer
     *
     * @ORM\Column(name="estudiantesPorMesa", type="integer")
     */
    private $estudiantesPorMesa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="datetime")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFin", type="datetime")
     */
    private $fechaFin;


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
     * Set clavePractica
     *
     * @param integer $clavePractica
     * @return Practicas
     */
    public function setClavePractica($clavePractica)
    {
        $this->clavePractica = $clavePractica;

        return $this;
    }

    /**
     * Get clavePractica
     *
     * @return integer 
     */
    public function getClavePractica()
    {
        return $this->clavePractica;
    }

    /**
     * Set disponible
     *
     * @param boolean $disponible
     * @return Practicas
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
     * @return Practicas
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
     * @return Practicas
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
     * Set mesasDisponibles
     *
     * @param integer $mesasDisponibles
     * @return Practicas
     */
    public function setMesasDisponibles($mesasDisponibles)
    {
        $this->mesasDisponibles = $mesasDisponibles;

        return $this;
    }

    /**
     * Get mesasDisponibles
     *
     * @return integer 
     */
    public function getMesasDisponibles()
    {
        return $this->mesasDisponibles;
    }

    /**
     * Set estudiantesPorMesa
     *
     * @param integer $estudiantesPorMesa
     * @return Practicas
     */
    public function setEstudiantesPorMesa($estudiantesPorMesa)
    {
        $this->estudiantesPorMesa = $estudiantesPorMesa;

        return $this;
    }

    /**
     * Get estudiantesPorMesa
     *
     * @return integer 
     */
    public function getEstudiantesPorMesa()
    {
        return $this->estudiantesPorMesa;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Practicas
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return Practicas
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }
}
