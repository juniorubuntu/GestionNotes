<?php

namespace School\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Inscription
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Inscription {

    function __construct() {
        $this->setDateDerniereAvance(new \DateTime(date('Y-m-d')));
        $this->setDateDebut(new \DateTime(date('Y')));
        $this->setDateFin(new \DateTime(date('Y-m-d', time() + (24 * 3600 * 366))));
        $this->setAnnee(date('Y') . '/' . date('Y', time() + (24 * 3600 * 366)));
        $this->setAvance(0);
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
     * @ORM\ManyToOne(targetEntity="School\StudentBundle\Entity\Student")
     * @Assert\NotBlank()
     */
    private $student;

    /**
     * @ORM\ManyToOne(targetEntity="School\StudentBundle\Entity\Classe")
     * @Assert\NotBlank()
     */
    private $classe;

    /**
     * @var integer
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\NotBlank()
     */
    private $avance;

    /**
     * @var \Date
     *
     * @ORM\Column(type="date")
     */
    private $dateDerniereAvance;

    /**
     * @var \Date
     *
     * @ORM\Column(name="datedebut", type="date")
     */
    private $dateDebut;

    /**
     * @var \Date
     *
     * @ORM\Column(name="datefin", type="date")
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", length=10)
     */
    private $annee;

    /**
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Inscription
     */
    public function setDateDebut($dateDebut) {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut() {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Inscription
     */
    public function setDateFin($dateFin) {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin() {
        return $this->dateFin;
    }

    /**
     * Set annee
     *
     * @param string $annee
     * @return Inscription
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
     * Set status
     *
     * @param boolean $status
     * @return Inscription
     */
    public function setStatus($status) {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Set student
     *
     * @param \School\StudentBundle\Entity\Student $student
     * @return Inscription
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
     * Set classe
     *
     * @param \School\StudentBundle\Entity\Classe $classe
     * @return Inscription
     */
    public function setClasse(\School\StudentBundle\Entity\Classe $classe = null) {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return \School\StudentBundle\Entity\Classe 
     */
    public function getClasse() {
        return $this->classe;
    }

    /**
     * Set avance
     *
     * @param integer $avance
     * @return Inscription
     */
    public function setAvance($avance) {
        $this->avance += $avance;

        return $this;
    }

    /**
     * Get avance
     *
     * @return integer 
     */
    public function getAvance() {
        return $this->avance;
    }

    /**
     * Set dateDerniereAvance
     *
     * @param \DateTime $dateDerniereAvance
     * @return Inscription
     */
    public function setDateDerniereAvance($dateDerniereAvance) {
        $this->dateDerniereAvance = $dateDerniereAvance;

        return $this;
    }

    /**
     * Get dateDerniereAvance
     *
     * @return \DateTime 
     */
    public function getDateDerniereAvance() {
        return $this->dateDerniereAvance;
    }

}