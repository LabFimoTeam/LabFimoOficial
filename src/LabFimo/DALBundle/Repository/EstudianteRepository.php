<?php

namespace LabFimo\DALBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * EstudianteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EstudianteRepository extends EntityRepository implements RepositorioGenerico {

    /**
     * Set usuario
     *
     * @param \LabFimo\SecurityBundle\Entity\Usuario $usuario
     * @return Estudiante
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
     * Add enrroles
     *
     * @param \LabFimo\DALBundle\Entity\Enrrol $enrroles
     * @return Estudiante
     */
    public function addEnrrole(\LabFimo\DALBundle\Entity\Enrrol $enrroles) {
        $this->enrroles[] = $enrroles;

        return $this;
    }

    /**
     * Remove enrroles
     *
     * @param \LabFimo\DALBundle\Entity\Enrrol $enrroles
     */
    public function removeEnrrole(\LabFimo\DALBundle\Entity\Enrrol $enrroles) {
        $this->enrroles->removeElement($enrroles);
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
