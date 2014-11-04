<?php

namespace LabFimo\DALBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Practica
 *
 * @ORM\Table()
 * @ORM\Entity* @ORM\Entity(repositoryClass="LabFimo\DALBundle\Repository\PracticaRepository")
 */
class Practica {

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
     * @ORM\Column(name="clavePractica", type="integer")
     */
    private $clavePractica;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esDisponible", type="boolean")
     */
    private $esDisponible;

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
     * @ORM\OneToMany(targetEntity="Brigada", mappedBy="practica")
     * */
    private $brigadas;

}
