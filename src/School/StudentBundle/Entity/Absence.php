<?php

namespace School\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Classe
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Absence {

    public function __construct() {
        $this->setNbreAbsence(0);
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
     * @ORM\ManyToOne(targetEntity="School\StudentBundle\Entity\Inscription")
     * @Assert\NotBlank()
     */
    private $student;

    /**
     * @ORM\ManyToOne(targetEntity="School\NoteBundle\Entity\Sequence")
     * @Assert\NotBlank()
     */
    private $sequence;

    /**
     * @ORM\ManyToOne(targetEntity="School\ConfigBundle\Entity\Annee")
     * @Assert\NotBlank()
     */
    private $anneeScolaire;

    /**
     * @var float
     *
     * @ORM\Column(type="integer")
     */
    private $nbreAbsence;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nbreAbscence
     *
     * @param integer $nbreAbscence
     * @return Absence
     */
    public function setNbreAbsence($nbreAbsence) {
        $this->nbreAbsence = $nbreAbsence;

        return $this;
    }
    
    /**
     * Set nbreAbscence
     *
     * @param integer $nbreAbscence
     * @return Absence
     */
    public function setUpNbreAbsence($nbreAbsence) {
        $this->nbreAbsence += $nbreAbsence;

        return $this;
    }

    /**
     * Get nbreAbscence
     *
     * @return integer 
     */
    public function getNbreAbsence() {
        return $this->nbreAbsence;
    }

    /**
     * Set student
     *
     * @param \School\StudentBundle\Entity\Inscription $student
     * @return Absence
     */
    public function setStudent(\School\StudentBundle\Entity\Inscription $student = null) {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \School\StudentBundle\Entity\Inscription 
     */
    public function getStudent() {
        return $this->student;
    }

    /**
     * Set sequence
     *
     * @param \School\NoteBundle\Entity\Sequence $sequence
     * @return Absence
     */
    public function setSequence(\School\NoteBundle\Entity\Sequence $sequence = null) {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return \School\NoteBundle\Entity\Sequence 
     */
    public function getSequence() {
        return $this->sequence;
    }

    /**
     * Set anneeScolaire
     *
     * @param \School\ConfigBundle\Entity\Annee $anneeScolaire
     * @return Absence
     */
    public function setAnneeScolaire(\School\ConfigBundle\Entity\Annee $anneeScolaire = null) {
        $this->anneeScolaire = $anneeScolaire;

        return $this;
    }

    /**
     * Get anneeScolaire
     *
     * @return \School\ConfigBundle\Entity\Annee 
     */
    public function getAnneeScolaire() {
        return $this->anneeScolaire;
    }

}