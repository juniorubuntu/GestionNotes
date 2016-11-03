<?php

namespace Proxies\__CG__\Shopping\ShopBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Produit extends \Shopping\ShopBundle\Entity\Produit implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setNom($nom)
    {
        $this->__load();
        return parent::setNom($nom);
    }

    public function getNom()
    {
        $this->__load();
        return parent::getNom();
    }

    public function setQteStock($qteStock)
    {
        $this->__load();
        return parent::setQteStock($qteStock);
    }

    public function getQteStock()
    {
        $this->__load();
        return parent::getQteStock();
    }

    public function setQteMin($qteMin)
    {
        $this->__load();
        return parent::setQteMin($qteMin);
    }

    public function getQteMin()
    {
        $this->__load();
        return parent::getQteMin();
    }

    public function setPrixUnit($prixUnit)
    {
        $this->__load();
        return parent::setPrixUnit($prixUnit);
    }

    public function getPrixUnit()
    {
        $this->__load();
        return parent::getPrixUnit();
    }

    public function setCategorie(\Shopping\ShopBundle\Entity\Categorie $categorie = NULL)
    {
        $this->__load();
        return parent::setCategorie($categorie);
    }

    public function getCategorie()
    {
        $this->__load();
        return parent::getCategorie();
    }

    public function setQteRecu($qteRecu)
    {
        $this->__load();
        return parent::setQteRecu($qteRecu);
    }

    public function getQteRecu()
    {
        $this->__load();
        return parent::getQteRecu();
    }

    public function setUnite($unite)
    {
        $this->__load();
        return parent::setUnite($unite);
    }

    public function getUnite()
    {
        $this->__load();
        return parent::getUnite();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nom', 'unite', 'qteStock', 'qteMin', 'prixUnit', 'categorie');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}