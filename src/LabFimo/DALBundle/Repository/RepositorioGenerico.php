<?php

namespace LabFimo\DALBundle\Repository;

/**
 *
 * @author Erik Villegas
 */
interface RepositorioGenerico {

    public function GetWithRawSql($Sql);
    public function Update($entidad);
    public function Save($endtidad);
    public function Delete($entidad);
}
