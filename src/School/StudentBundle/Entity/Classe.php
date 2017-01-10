<?php

namespace School\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Classe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="School\StudentBundle\Entity\ClasseRepository")
 */
class Classe {

    public function __toString() {
        return $this->getNom();
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviation", type="string", length=255)
     */
    private $abreviation;

    /**
     * @ORM\ManyToOne(targetEntity="Classe")
     */
    private $classePere;
    
    /**
     * @ORM\ManyToOne(targetEntity="Classe")
     */
    private $classeNext;

    /**
     * @ORM\ManyToOne(targetEntity="School\StudentBundle\Entity\Cycle")
     * @Assert\NotBlank()
     */
    private $cycle;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Classe
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set abreviation
     *
     * @param string $abreviation
     * @return Classe
     */
    public function setAbreviation($abreviation) {
        $this->abreviation = $abreviation;

        return $this;
    }

    /**
     * Get abreviation
     *
     * @return string 
     */
    public function getAbreviation() {
        return $this->abreviation;
    }


    /**
     * Set classePere
     *
     * @param \School\StudentBundle\Entity\Classe $classePere
     * @return Classe
     */
    public function setClassePere(\School\StudentBundle\Entity\Classe $classePere = null)
    {
        $this->classePere = $classePere;
    
        return $this;
    }

    /**
     * Get classePere
     *
     * @return \School\StudentBundle\Entity\Classe 
     */
    public function getClassePere()
    {
        return $this->classePere;
    }

    /**
     * Set cycle
     *
     * @param \School\StudentBundle\Entity\Cycle $cycle
     * @return Classe
     */
    public function setCycle(\School\StudentBundle\Entity\Cycle $cycle = null)
    {
        $this->cycle = $cycle;

        return $this;
    }

    /**
     * Get cycle
     *
     * @return \School\StudentBundle\Entity\Cycle 
     */
    public function getCycle()
    {
        return $this->cycle;
    }

    /**
     * Set classeNext
     *
     * @param \School\StudentBundle\Entity\Classe $classeNext
     * @return Classe
     */
    public function setClasseNext(\School\StudentBundle\Entity\Classe $classeNext = null)
    {
        $this->classeNext = $classeNext;
    
        return $this;
    }

    /**
     * Get classeNext
     *
     * @return \School\StudentBundle\Entity\Classe 
     */
    public function getClasseNext()
    {
        return $this->classeNext;
    }
}