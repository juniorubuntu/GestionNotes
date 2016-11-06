<?php

namespace School\TeacherBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Teacher
 * 
 * @ORM\Table()
 * @ORM\Entity
 */
class Teacher {

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

}
