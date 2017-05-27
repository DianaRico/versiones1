<?php

namespace Curso\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * zona
 */
class zona
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $idzona;

    /**
     * @var string
     */
    private $nomzona;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idzona
     *
     * @param string $idzona
     * @return zona
     */
    public function setIdzona($idzona)
    {
        $this->idzona = $idzona;
    
        return $this;
    }

    /**
     * Get idzona
     *
     * @return string 
     */
    public function getIdzona()
    {
        return $this->idzona;
    }

    /**
     * Set nomzona
     *
     * @param string $nomzona
     * @return zona
     */
    public function setNomzona($nomzona)
    {
        $this->nomzona = $nomzona;
    
        return $this;
    }

    /**
     * Get nomzona
     *
     * @return string 
     */
    public function getNomzona()
    {
        return $this->nomzona;
    }
}
