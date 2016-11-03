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
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $nom;

    /**
     *
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\NotBlank()
     */
    private $anciennete;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $matricule;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank()
     */
    private $grade;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $diplomes;

    /**
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

}