<?php

namespace LabFimo\DALBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Brigada
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Brigada {

    public function __construct() {
        $this->enrroles = new ArrayCollection();
        $this->instructor = new Instructor();
        $this->practica = new Practica();
        $this->plan = new PlanDeEstudios();
        $this->clase = new ClaveClase();
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
     * @ORM\Column(name="claveBrigada", type="integer")
     */
    private $claveBrigada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaInicio", type="time")
     */
    private $horaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaFin", type="time")
     */
    private $horaFin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esDisponible", type="boolean")
     */
    private $esDisponible;

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
     * @ORM\OneToMany(targetEntity="Enrrol", mappedBy="brigada")
     * */
    private $enrroles;

    /**
     * @ORM\OneToOne(targetEntity="PlanDeEstudios")
     * @ORM\JoinColumn(name="planEstudios_id", referencedColumnName="id")
     * */
    private $plan;

    /**
     * @ORM\OneToOne(targetEntity="ClaveClase")
     * @ORM\JoinColumn(name="ClaveClase_id", referencedColumnName="id")
     * */
    private $clase;

    /**
     * @ORM\ManyToOne(targetEntity="Instructor", inversedBy="brigadas")
     * @ORM\JoinColumn(name="instructor_id", referencedColumnName="id")
     * */
    private $instructor;

    /**
     * @ORM\ManyToOne(targetEntity="Practica", inversedBy="brigadas")
     * @ORM\JoinColumn(name="practica_id", referencedColumnName="id")
     * */
    private $practica;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set claveBrigada
     *
     * @param integer $claveBrigada
     * @return Brigada
     */
    public function setClaveBrigada($claveBrigada) {
        $this->claveBrigada = $claveBrigada;

        return $this;
    }

    /**
     * Get claveBrigada
     *
     * @return integer 
     */
    public function getClaveBrigada() {
        return $this->claveBrigada;
    }

    /**
     * Set horaInicio
     *
     * @param \DateTime $horaInicio
     * @return Brigada
     */
    public function setHoraInicio($horaInicio) {
        $this->horaInicio = $horaInicio;

        return $this;
    }

    /**
     * Get horaInicio
     *
     * @return \DateTime 
     */
    public function getHoraInicio() {
        return $this->horaInicio;
    }

    /**
     * Set horaFin
     *
     * @param \DateTime $horaFin
     * @return Brigada
     */
    public function setHoraFin($horaFin) {
        $this->horaFin = $horaFin;

        return $this;
    }

    /**
     * Get horaFin
     *
     * @return \DateTime 
     */
    public function getHoraFin() {
        return $this->horaFin;
    }

    /**
     * Set esDisponible
     *
     * @param boolean $esDisponible
     * @return Brigada
     */
    public function setEsDisponible($esDisponible) {
        $this->esDisponible = $esDisponible;

        return $this;
    }

    /**
     * Get esDisponible
     *
     * @return boolean 
     */
    public function getEsDisponible() {
        return $this->esDisponible;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Brigada
     */
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion() {
        return $this->descripcion;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return Brigada
     */
    public function setComentarios($comentarios) {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios() {
        return $this->comentarios;
    }

    public function getClaveDeClase() {
        return $this->claveBrigada;
    }

    public function setClaveDeClase($claveClase) {
        $this->claveBrigada = $claveClase;
        return $this;
    }

    /**
     * Get Plan
     * @return Brigada
     */
    public function getPlan() {
        return $this->plan;
    }

    /**
     * Set Plan
     *
     * @param string Plan
     * @return Brigada
     */
    public function setPlan($plan) {
        $this->plan = $plan;

        return $this;
    }

    /**
     * Get Clase
     * @return Brigada
     */
    public function getClase() {
        return $this->clase;
    }

    /**
     * Set Clase
     *
     * @param integer Clave
     * @return Brigada
     */
    public function setClase($clase) {
        $this->clase = $clase;

        return $this;
    }

    public function getEnrroles() {
        return $this->enrroles;
    }

    public function setEnrroles($enrrol) {
        $this->enrroles = $enrrol;

        return $this;
    }

    public function getInstructor() {
        return $this->instructor;
    }

    public function setInstrucor($instructor) {
        $this->instructor = $instructor;

        return $this;
    }

    public function getPractica() {
        return $this->practica;
    }

    public function setPractica($practica) {
        $this->practica = $practica;

        return $this;
    }

}
