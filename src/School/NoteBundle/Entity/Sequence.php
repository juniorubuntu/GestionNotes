<?php

namespace School\NoteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Sequence
 * 
 * @ORM\Table()
 * @ORM\Entity
 */
class Sequence {

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
     * @var string
     * 
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $debut;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $fin;

}
