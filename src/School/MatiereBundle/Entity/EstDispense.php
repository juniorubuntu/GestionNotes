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
     * @ORM\ManyToOne(targetEntity="School\UserBundle\Entity\User")
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
     * @ORM\ManyToOne(targetEntity="School\ConfigBundle\Entity\Annee")
     * @Assert\NotBlank()
     */
    private $annee;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private $nombreHeuresAnnuel;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $titulaire;

    private $nbreFilles;
    private $nbreGarcons;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set coefficient
     *
     * @param integer $coefficient
     * @return EstDispense
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
     * Set nombreHeuresAnnuel
     *
     * @param integer $nombreHeuresAnnuel
     * @return EstDispense
     */
    public function setNombreHeuresAnnuel($nombreHeuresAnnuel) {
        $this->nombreHeuresAnnuel = $nombreHeuresAnnuel;

        return $this;
    }

    /**
     * Get nombreHeuresAnnuel
     *
     * @return integer 
     */
    public function getNombreHeuresAnnuel() {
        return $this->nombreHeuresAnnuel;
    }

    /**
     * Set matiere
     *
     * @param \School\MatiereBundle\Entity\Matiere $matiere
     * @return EstDispense
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

    /**
     * Set classe
     *
     * @param \School\StudentBundle\Entity\Classe $classe
     * @return EstDispense
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
     * Set enseignant
     *
     * @param \School\UserBundle\Entity\User $enseignant
     * @return EstDispense
     */
    public function setEnseignant(\School\UserBundle\Entity\User $enseignant = null) {
        $this->enseignant = $enseignant;

        return $this;
    }

    /**
     * Get enseignant
     *
     * @return \School\UserBundle\Entity\User 
     */
    public function getEnseignant() {
        return $this->enseignant;
    }

    /**
     * Set titulaire
     *
     * @param boolean $titulaire
     * @return EstDispense
     */
    public function setTitulaire($titulaire) {
        $this->titulaire = $titulaire;

        return $this;
    }

    /**
     * Get titulaire
     *
     * @return boolean 
     */
    public function getTitulaire() {
        return $this->titulaire;
    }


    /**
     * Set annee
     *
     * @param \School\ConfigBundle\Entity\Annee $annee
     * @return EstDispense
     */
    public function setAnnee(\School\ConfigBundle\Entity\Annee $annee = null)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return \School\ConfigBundle\Entity\Annee 
     */
    public function getAnnee()
    {
        return $this->annee;
    }


    public function setNbreFilles($nbreFilles){
        $this->nbreFilles= $nbreFilles;
        return $this;
    }


    public function getNbreFilles(){
        return $this->nbreFilles;
    }

    public function setNbreGarcons($nbreGarcons){
        $this->nbreGarcons= $nbreGarcons;
        return $this;
    }


    public function getNbreGarcons(){
        return $this->nbreGarcons;
    }
}
