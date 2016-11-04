<?php

namespace School\MatiereBundle\Entity;

namespace School\TeacherBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * EstDispense
 * 
 * @ORM\Table()
 * @ORM\Entity
 */
class Categorie {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Matiere")
     * @Assert\NotBlank()
     */
    private $matiere;

    /**
     * @ORM\ManyToOne(targetEntity="Enseignant")
     * @Assert\NotBlank()
     */
    private $enseignant;

    /**
     * @ORM\ManyToOne(targetEntity="Classe")
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

}
