<?php

namespace School\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Student
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="School\StudentBundle\Entity\StudentRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Student
{
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
     * @ORM\Column(name="matricule", type="string", length=10, unique=true)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="datetime")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuNaissance", type="string", length=255)
     */
    private $lieuNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPere", type="string", length=255)
     */
    private $nomPere;

    /**
     * @var string
     *
     * @ORM\Column(name="nomMere", type="string", length=255)
     */
    private $nomMere;

    /**
     * @var string
     *
     * @ORM\Column(name="adressePere", type="string", length=255)
     */
    private $adressePere;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseMere", type="string", length=255)
     */
    private $adresseMere;

    /**
     * @var string
     *
     * @ORM\Column(name="personneAcontacter", type="string", length=255)
     */
    private $personneAcontacter;

    /**
     * @var string
     *
     * @ORM\Column(name="dernierEtablissementFreq", type="string", length=255)
     */
    private $dernierEtablissementFreq;

    /**
     * @ORM\OneToOne(targetEntity="School\StudentBundle\Entity\Image",cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $photo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     * @return Student
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Student
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Student
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set lieuNaissance
     *
     * @param string $lieuNaissance
     * @return Student
     */
    public function setLieuNaissance($lieuNaissance)
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }

    /**
     * Get lieuNaissance
     *
     * @return string 
     */
    public function getLieuNaissance()
    {
        return $this->lieuNaissance;
    }

    /**
     * Set nomPere
     *
     * @param string $nomPere
     * @return Student
     */
    public function setNomPere($nomPere)
    {
        $this->nomPere = $nomPere;

        return $this;
    }

    /**
     * Get nomPere
     *
     * @return string 
     */
    public function getNomPere()
    {
        return $this->nomPere;
    }

    /**
     * Set nomMere
     *
     * @param string $nomMere
     * @return Student
     */
    public function setNomMere($nomMere)
    {
        $this->nomMere = $nomMere;

        return $this;
    }

    /**
     * Get nomMere
     *
     * @return string 
     */
    public function getNomMere()
    {
        return $this->nomMere;
    }

    /**
     * Set adressePere
     *
     * @param string $adressePere
     * @return Student
     */
    public function setAdressePere($adressePere)
    {
        $this->adressePere = $adressePere;

        return $this;
    }

    /**
     * Get adressePere
     *
     * @return string 
     */
    public function getAdressePere()
    {
        return $this->adressePere;
    }

    /**
     * Set adresseMere
     *
     * @param string $adresseMere
     * @return Student
     */
    public function setAdresseMere($adresseMere)
    {
        $this->adresseMere = $adresseMere;

        return $this;
    }

    /**
     * Get adresseMere
     *
     * @return string 
     */
    public function getAdresseMere()
    {
        return $this->adresseMere;
    }

    /**
     * Set personneAcontacter
     *
     * @param string $personneAcontacter
     * @return Student
     */
    public function setPersonneAcontacter($personneAcontacter)
    {
        $this->personneAcontacter = $personneAcontacter;

        return $this;
    }

    /**
     * Get personneAcontacter
     *
     * @return string 
     */
    public function getPersonneAcontacter()
    {
        return $this->personneAcontacter;
    }

    /**
     * Set dernierEtablissementFreq
     *
     * @param string $dernierEtablissementFreq
     * @return Student
     */
    public function setDernierEtablissementFreq($dernierEtablissementFreq)
    {
        $this->dernierEtablissementFreq = $dernierEtablissementFreq;

        return $this;
    }

    /**
     * Get dernierEtablissementFreq
     *
     * @return string 
     */
    public function getDernierEtablissementFreq()
    {
        return $this->dernierEtablissementFreq;
    }

    /**
     * Set photo
     *
     * @param \School\StudentBundle\Entity\Image $image
     * @return Student
     */
    public function setPhoto(\School\StudentBundle\Entity\Image $image = null)
    {
        $this->photo = $image;

        return $this;
    }

    /**
     * Get photo
     *
     * @return \School\StudentBundle\Entity\Image 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Student
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }
}