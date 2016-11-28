<?php

namespace School\MatiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Matiere
 * 
 * @ORM\Table()
 * @ORM\Entity
 */
class Matiere {

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
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $nom;
    private $taille;

    function getTaille() {
        return $this->taille;
    }

    function setTaille($taille) {
        $this->taille = $taille;
    }

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $abreviation;

    /**
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @Assert\NotBlank()
     */
    private $categorie;
    private $evaluationSeq;

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
     * @return Matiere
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
     * Set coefficient
     *
     * @param integer $coefficient
     * @return Matiere
     */
    public function setCoefficient($coefficient) {
        $this->coefficient = $coefficient;

        return $this;
    }

    /**
     * Get coefficient
     *
     * @return integer 
     */
    public function getCoefficient() {
        return $this->coefficient;
    }

    /**
     * Set abreviation
     *
     * @param string $abreviation
     * @return Matiere
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
     * Set categorie
     *
     * @param \School\MatiereBundle\Entity\Categorie $categorie
     * @return Matiere
     */
    public function setCategorie(\School\MatiereBundle\Entity\Categorie $categorie = null) {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \School\MatiereBundle\Entity\Categorie 
     */
    public function getCategorie() {
        return $this->categorie;
    }

    function getEvaluationSeq() {
        return $this->evaluationSeq;
    }

    function setEvaluationSeq($evaluationSeq) {
        $this->evaluationSeq = $evaluationSeq;
    }

}
