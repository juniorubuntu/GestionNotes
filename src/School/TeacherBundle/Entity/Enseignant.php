<?php

namespace School\TeacherBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Enseignant
 * 
 * @ORM\Table()
 * @ORM\Entity
 */
class Enseignant {

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
    private $nom;

    /**
     * @var integer
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\NotBlank()
     */
    private $anciennete;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $matricule;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank()
     */
    private $grade;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $diplomes;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone;

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
     * @return Enseignant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set anciennete
     *
     * @param integer $anciennete
     * @return Enseignant
     */
    public function setAnciennete($anciennete)
    {
        $this->anciennete = $anciennete;
    
        return $this;
    }

    /**
     * Get anciennete
     *
     * @return integer 
     */
    public function getAnciennete()
    {
        return $this->anciennete;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     * @return Enseignant
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    
        return $this;
    }

    /**
     * Get matricule
     *
     * @return string 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set grade
     *
     * @param string $grade
     * @return Enseignant
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    
        return $this;
    }

    /**
     * Get grade
     *
     * @return string 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set diplomes
     *
     * @param string $diplomes
     * @return Enseignant
     */
    public function setDiplomes($diplomes)
    {
        $this->diplomes = $diplomes;
    
        return $this;
    }

    /**
     * Get diplomes
     *
     * @return string 
     */
    public function getDiplomes()
    {
        return $this->diplomes;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Enseignant
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
}