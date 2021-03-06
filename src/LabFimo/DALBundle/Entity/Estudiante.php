<?php

namespace LabFimo\DALBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Estudiante
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LabFimo\DALBundle\Repository\EstudianteRepository")
 * 
 */
class Estudiante {

    public function __construct() {
        $this->enrroles = new ArrayCollection();
        $this->plan = new PlanDeEstudios();
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
     * @ORM\Column(name="matricula", type="integer")
     */
    private $matricula;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarios", type="text")
     */
    private $comentarios;

    /**
     * @ORM\OneToOne(targetEntity="LabFimo\SecurityBundle\Entity\Usuario")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="medioCurso", type="decimal")
     */
    private $medioCurso;

    /**
     * @var string
     *
     * @ORM\Column(name="ordinario", type="decimal")
     */
    private $ordinario;

    /**
     * @ORM\OneToMany(targetEntity="Enrrol", mappedBy="estudiante")
     * */
    private $enrroles;

    /**
     * @ORM\OneToOne(targetEntity="PlanDeEstudios")
     * @ORM\JoinColumn(name="planEstudios_id", referencedColumnName="id")
     * */
    private $plan;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set matricula
     *
     * @param integer $matricula
     * @return Estudiante
     */
    public function setMatricula($matricula) {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula
     *
     * @return integer 
     */
    public function getMatricula() {
        return $this->matricula;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return Estudiante
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

    /**
     * Set medioCurso
     *
     * @param string $medioCurso
     * @return Estudiante
     */
    public function setMedioCurso($medioCurso) {
        $this->medioCurso = $medioCurso;

        return $this;
    }

    /**
     * Get medioCurso
     *
     * @return string 
     */
    public function getMedioCurso() {
        return $this->medioCurso;
    }

    /**
     * Set ordinario
     *
     * @param string $ordinario
     * @return Estudiante
     */
    public function setOrdinario($ordinario) {
        $this->ordinario = $ordinario;

        return $this;
    }

    /**
     * Get ordinario
     *
     * @return string 
     */
    public function getOrdinario() {
        return $this->ordinario;
    }

    //Falta implementar el set enrroles
    public function getEnrroles() {
        return $this->enrroles;
    }

    /**
     * Get Plan
     * @return Estudiante
     */
    public function getPlan() {
        return $this->plan;
    }

    /**
     * Set Plan
     *
     * @param string $plan
     * @return Estudiante
     */
    public function setPlan($plan) {
        $this->plan = $plan;

        return $this;
    }

}
