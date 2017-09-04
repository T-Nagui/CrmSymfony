<?php
/**
 * Created by PhpStorm.
 * User: nagui
 * Date: 25/08/17
 * Time: 12:05
 */

namespace AppBundle\Entity\Pros;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="prospect")
 */
class Prospect
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $name;
    /**
     * @ORM\Column(type="string")
     */
    private $lastName;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $address;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $phone;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $gsm;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $fax;
    /**
     * @ORM\Column(type="boolean",nullable=true)
     */
    private $public;
    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $createdAt;
    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $updatedAt;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $createdBy;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pros\Speciality")
     * @ORM\JoinColumn(nullable=false)
     */

    private $speciality;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pros\Governorate")
     * @ORM\JoinColumn(nullable=false)
     */
    private $governorate;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pros\Activite")
     * @ORM\JoinColumn(nullable=false)
     */
    private $activite;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pros\Potential")
     * @ORM\JoinColumn(nullable=true)
     */
    private $potential;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pros\Delegation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $delegation;
    /**
     * @return mixed
     */
    public function getPotential()
    {
        return $this->potential;
    }

    /**
     * @param mixed $potential
     */
    public function setPotential($potential)
    {
        $this->potential = $potential;
    }

    /**
     * @return mixed
     */
    public function getDelegation()
    {
        return $this->delegation;
    }

    /**
     * @param mixed $delegation
     */
    public function setDelegation($delegation)
    {
        $this->delegation = $delegation;
    }



    /**
     * @return mixed
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * @param mixed $activite
     */
    public function setActivite($activite)
    {
        $this->activite = $activite;
    }

    /**
     * @return mixed
     */
    public function getGovernorate()
    {
        return $this->governorate;
    }

    /**
     * @param mixed $governorate
     */
    public function setGovernorate(Governorate $governorate)
    {
        $this->governorate = $governorate;
    }



    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     *
     * @param mixed $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return mixed
     */
    public function getSpeciality()
    {
        return $this->speciality;
    }

    /**
     * @param mixed $speciality
     */
    public function setSpeciality(Speciality $speciality)
    {
        $this->speciality = $speciality;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getGsm()
    {
        return $this->gsm;
    }

    /**
     * @param mixed $gsm
     */
    public function setGsm($gsm)
    {
        $this->gsm = $gsm;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param mixed $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * @return mixed
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * @param mixed $public
     */
    public function setPublic($public)
    {
        $this->public = $public;
    }

    /**
     *
     */
    public function __construct()
    {
        if ($this->getCreatedAt() == null) {
            $this->setCreatedAt(new \DateTime('now'));
        }

    }
}