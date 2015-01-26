<?php

namespace LabFimo\DALBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * InstructorRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class InstructorRepository extends EntityRepository implements RepositorioGenerico {

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set numeroEmpleado
     *
     * @param integer $numeroEmpleado
     * @return Instructor
     */
    public function setNumeroEmpleado($numeroEmpleado) {
        $this->numeroEmpleado = $numeroEmpleado;

        return $this;
    }

    /**
     * Get numeroEmpleado
     *
     * @return integer 
     */
    public function getNumeroEmpleado() {
        return $this->numeroEmpleado;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Instructor
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
     * Set usuario
     *
     * @param \LabFimo\SecurityBundle\Entity\Usuario $usuario
     * @return Instructor
     */
    public function setUsuario(\LabFimo\SecurityBundle\Entity\Usuario $usuario = null) {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \LabFimo\SecurityBundle\Entity\Usuario 
     */
    public function getUsuario() {
        return $this->usuario;
    }

    /**
     * Add brigadas
     *
     * @param \LabFimo\DALBundle\Entity\Brigada $brigadas
     * @return Instructor
     */
    public function addBrigada(\LabFimo\DALBundle\Entity\Brigada $brigadas) {
        $this->brigadas[] = $brigadas;

        return $this;
    }

    /**
     * Remove brigadas
     *
     * @param \LabFimo\DALBundle\Entity\Brigada $brigadas
     */
    public function removeBrigada(\LabFimo\DALBundle\Entity\Brigada $brigadas) {
        $this->brigadas->removeElement($brigadas);
    }

    /**
     * Get brigadas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBrigadas() {
        return $this->brigadas;
    }

    public function Delete($entidad) {
        
    }

    public function GetWithRawSql($Sql) {
        
    }

    public function Save($endtidad) {
        
    }

    public function Update($entidad) {
        
    }

}