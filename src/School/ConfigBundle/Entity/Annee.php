<?php

namespace School\ConfigBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * 
 * 
 * @ORM\Table()
 * @ORM\Entity
 *
 * @author atbr
 */
class Annee {

    public function __toString() {
        return $this->getAnneeScolaire();
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
     */
    private $anneeScolaire;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set anneeScolaire
     *
     * @param string $anneeScolaire
     * @return Annee
     */
    public function setAnneeScolaire($anneeScolaire) {
        $this->anneeScolaire = $anneeScolaire;

        return $this;
    }

    /**
     * Get anneeScolaire
     *
     * @return string 
     */
    public function getAnneeScolaire() {
        return $this->anneeScolaire;
    }

}