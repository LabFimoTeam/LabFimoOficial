<?php

namespace LabFimo\DALBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maestro
 *
 * @ORM\Table()
 * @ORM\Entity* @ORM\Entity(repositoryClass="LabFimo\DALBundle\Repository\MaestroRepository")
 */
class Maestro {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarios", type="text")
     */
    private $comentarios;

}
