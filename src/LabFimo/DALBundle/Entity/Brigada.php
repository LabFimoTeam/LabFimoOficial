<?php

namespace LabFimo\DALBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Brigada
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LabFimo\DALBundle\Repository\BrigadaRepository")
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
}