<?php
/**
 * Created by PhpStorm.
 * User: nagui
 * Date: 25/08/17
 * Time: 12:05
 */
namespace CoreBundle\Entity;

use CoreBundle\Traits\Traceable;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ProspectRepository")
 * @ORM\Table(name="prospect")
 */
class Prospect
{

    use Traceable;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string",unique=true)
     */
    private $email;
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
    private $secondPhone;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $gsm;


    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $secondGsm;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $fax;
    /**
     * @ORM\ManyToOne(targetEntity="CoreBundle\Entity\Speciality")
     * @ORM\JoinColumn(nullable=false)
     */

    private $speciality;

    /**
     * @ORM\ManyToOne(targetEntity="CoreBundle\Entity\Governorate")
     * @ORM\JoinColumn(nullable=false)
     */
    private $governorate;
    /**
     * @ORM\ManyToOne(targetEntity="CoreBundle\Entity\Activity")
     * @ORM\JoinColumn(nullable=false)
     */
    private $activity;
    /**
     * @ORM\ManyToOne(targetEntity="CoreBundle\Entity\Potential")
     * @ORM\JoinColumn(nullable=true)
     */
    private $potential;
    /**
     * @ORM\ManyToOne(targetEntity="CoreBundle\Entity\Delegation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $delegation;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
    public function getSecondPhone()
    {
        return $this->secondPhone;
    }

    /**
     * @param mixed $secondPhone
     */
    public function setSecondPhone($secondPhone)
    {
        $this->secondPhone = $secondPhone;
    }

    /**
     * @return mixed
     */
    public function getSecondGsm()
    {
        return $this->secondGsm;
    }

    /**
     * @param mixed $secondGsm
     */
    public function setSecondGsm($secondGsm)
    {
        $this->secondGsm = $secondGsm;
    }
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
    public function setPotential(Potential $potential)
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
    public function setDelegation(Delegation $delegation)
    {
        $this->delegation = $delegation;
    }



    /**
     * @return mixed
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * @param mixed $activity
     */
    public function setActivity(Activity $activity)
    {
        $this->activity = $activity;
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


}