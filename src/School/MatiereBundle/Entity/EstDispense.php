<?php

namespace School\MatiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * EstDispense
 * 
 * @ORM\Table()
 * @ORM\Entity
 */
class EstDispense {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="School\MatiereBundle\Entity\Matiere")
     * @Assert\NotBlank()
     */
    private $matiere;

    /**
     * @ORM\ManyToOne(targetEntity="School\TeacherBundle\Entity\Enseignant")
     * @Assert\NotBlank()
     */
    private $enseignant;

    /**
     * @ORM\ManyToOne(targetEntity="School\StudentBundle\Entity\Classe")
     * @Assert\NotBlank()
     */
    private $classe;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private $coefficient;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $annee;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private $nombreHeuresAnnuel;


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
     * Set coefficient
     *
     * @param integer $coefficient
     * @return EstDispense
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;
    
        return $this;
    }

    /**
     * Get coefficient
     *
     * @return integer 
     */
    public function getCoefficient()
    {
        return $this->coefficient;
    }

    /**
     * Set annee
     *
     * @param string $annee
     * @return EstDispense
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    
        return $this;
    }

    /**
     * Get annee
     *
     * @return string 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set nombreHeuresAnnuel
     *
     * @param integer $nombreHeuresAnnuel
     * @return EstDispense
     */
    public function setNombreHeuresAnnuel($nombreHeuresAnnuel)
    {
        $this->nombreHeuresAnnuel = $nombreHeuresAnnuel;
    
        return $this;
    }

    /**
     * Get nombreHeuresAnnuel
     *
     * @return integer 
     */
    public function getNombreHeuresAnnuel()
    {
        return $this->nombreHeuresAnnuel;
    }

    /**
     * Set matiere
     *
     * @param \School\MatiereBundle\Entity\Matiere $matiere
     * @return EstDispense
     */
    public function setMatiere(\School\MatiereBundle\Entity\Matiere $matiere = null)
    {
        $this->matiere = $matiere;
    
        return $this;
    }

    /**
     * Get matiere
     *
     * @return \School\MatiereBundle\Entity\Matiere 
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set enseignant
     *
     * @param \School\TeacherBundle\Entity\Enseignant $enseignant
     * @return EstDispense
     */
    public function setEnseignant(\School\TeacherBundle\Entity\Enseignant $enseignant = null)
    {
        $this->enseignant = $enseignant;
    
        return $this;
    }

    /**
     * Get enseignant
     *
     * @return \School\TeacherBundle\Entity\Enseignant 
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }

    /**
     * Set classe
     *
     * @param \School\StudentBundle\Entity\Classe $classe
     * @return EstDispense
     */
    public function setClasse(\School\StudentBundle\Entity\Classe $classe = null)
    {
        $this->classe = $classe;
    
        return $this;
    }

    /**
     * Get classe
     *
     * @return \School\StudentBundle\Entity\Classe 
     */
    public function getClasse()
    {
        return $this->classe;
    }
}