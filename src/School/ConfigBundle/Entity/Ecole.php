<?php

namespace School\ConfigBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Ecole
 * 
 * @ORM\Table()
 * @ORM\Entity
 */
class Ecole {

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
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $nomFrancais;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $nomAnglais;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $deviseFrancais;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $deviseAnglais;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $boitePostal;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }


    /**
     * Set nomFrancais
     *
     * @param string $nomFrancais
     * @return Ecole
     */
    public function setNomFrancais($nomFrancais)
    {
        $this->nomFrancais = $nomFrancais;
    
        return $this;
    }

    /**
     * Get nomFrancais
     *
     * @return string 
     */
    public function getNomFrancais()
    {
        return $this->nomFrancais;
    }

    /**
     * Set nomAnglais
     *
     * @param string $nomAnglais
     * @return Ecole
     */
    public function setNomAnglais($nomAnglais)
    {
        $this->nomAnglais = $nomAnglais;
    
        return $this;
    }

    /**
     * Get nomAnglais
     *
     * @return string 
     */
    public function getNomAnglais()
    {
        return $this->nomAnglais;
    }

    /**
     * Set deviseFrancais
     *
     * @param string $deviseFrancais
     * @return Ecole
     */
    public function setDeviseFrancais($deviseFrancais)
    {
        $this->deviseFrancais = $deviseFrancais;
    
        return $this;
    }

    /**
     * Get deviseFrancais
     *
     * @return string 
     */
    public function getDeviseFrancais()
    {
        return $this->deviseFrancais;
    }

    /**
     * Set deviseAnglais
     *
     * @param string $deviseAnglais
     * @return Ecole
     */
    public function setDeviseAnglais($deviseAnglais)
    {
        $this->deviseAnglais = $deviseAnglais;
    
        return $this;
    }

    /**
     * Get deviseAnglais
     *
     * @return string 
     */
    public function getDeviseAnglais()
    {
        return $this->deviseAnglais;
    }

    /**
     * Set boitePostal
     *
     * @param string $boitePostal
     * @return Ecole
     */
    public function setBoitePostal($boitePostal)
    {
        $this->boitePostal = $boitePostal;
    
        return $this;
    }

    /**
     * Get boitePostal
     *
     * @return string 
     */
    public function getBoitePostal()
    {
        return $this->boitePostal;
    }
}