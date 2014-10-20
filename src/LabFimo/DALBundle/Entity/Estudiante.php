<?php

namespace LabFimo\DALBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estudiante
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Estudiante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="matricula", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $matricula;

    /**
     * @var integer
     *
     * @ORM\Column(name="grupo", type="integer")
     */
    private $grupo;

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
     * Get matricula
     *
     * @return integer 
     */
    public function geMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set grupo
     *
     * @param integer $grupo
     * @return Estudiante
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return integer 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return Estudiante
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
     * @return Estudiante
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
