<?php

namespace School\NoteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Evaluation
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Evaluation {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="School\StudentBundle\Entity\Student")
     * @Assert\NotBlank()
     */
    private $student;

    /**
     * @ORM\ManyToOne(targetEntity="School\NoteBundle\Entity\Sequence")
     * @Assert\NotBlank()
     */
    private $sequence;

    /**
     * @ORM\ManyToOne(targetEntity="School\MatiereBundle\Entity\Matiere")
     * @Assert\NotBlank()
     */
    private $matiere;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float")
     */
    private $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="anneeDebut", type="datetime", nullable = true)
     */
    private $anneeDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="anneeFin", type="datetime", nullable=true)
     */
    private $anneeFin;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", length=255)
     */
    private $annee;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return Evaluation
     */
    public function setNote($note) {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Set anneeDebut
     *
     * @param \DateTime $anneeDebut
     * @return Evaluation
     */
    public function setAnneeDebut($anneeDebut) {
        $this->anneeDebut = $anneeDebut;

        return $this;
    }

    /**
     * Get anneeDebut
     *
     * @return \DateTime 
     */
    public function getAnneeDebut() {
        return $this->anneeDebut;
    }

    /**
     * Set anneeFin
     *
     * @param \DateTime $anneeFin
     * @return Evaluation
     */
    public function setAnneeFin($anneeFin) {
        $this->anneeFin = $anneeFin;

        return $this;
    }

    /**
     * Get anneeFin
     *
     * @return \DateTime 
     */
    public function getAnneeFin() {
        return $this->anneeFin;
    }

    /**
     * Set annee
     *
     * @param string $annee
     * @return Evaluation
     */
    public function setAnnee($annee) {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string 
     */
    public function getAnnee() {
        return $this->annee;
    }

    /**
     * Set student
     *
     * @param \School\StudentBundle\Entity\Student $student
     * @return Evaluation
     */
    public function setStudent(\School\StudentBundle\Entity\Student $student = null) {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \School\StudentBundle\Entity\Student 
     */
    public function getStudent() {
        return $this->student;
    }

    /**
     * Set sequence
     *
     * @param \School\NoteBundle\Entity\Sequence $sequence
     * @return Evaluation
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

    public function __toString() {
        return $this->getNom();
    }

    /**
     * Set matiere
     *
     * @param \School\MatiereBundle\Entity\Matiere $matiere
     * @return Evaluation
     */
    public function setMatiere(\School\MatiereBundle\Entity\Matiere $matiere = null) {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * Get matiere
     *
     * @return \School\MatiereBundle\Entity\Matiere 
     */
    public function getMatiere() {
        return $this->matiere;
    }

}