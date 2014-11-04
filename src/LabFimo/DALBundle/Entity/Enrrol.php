<?php

namespace LabFimo\DALBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enrrol
 *
 * @ORM\Table()
 * @ORM\Entity* @ORM\Entity(repositoryClass="LabFimo\DALBundle\Repository\EnrrolRepository")
 */
class Enrrol {

    public function __construct() {
        $this->estudiante = new Estudiante();
        $this->brigada = new Brigada();
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
     * @ORM\ManyToOne(targetEntity="Estudiante", inversedBy="enrroles")
     * @ORM\JoinColumn(name="estudiante_id", referencedColumnName="id")
     * */
    private $estudiante;

    /**
     * @ORM\ManyToOne(targetEntity="Brigada", inversedBy="enrroles")
     * @ORM\JoinColumn(name="brigada_id", referencedColumnName="id")
     * */
    private $brigada;

}
