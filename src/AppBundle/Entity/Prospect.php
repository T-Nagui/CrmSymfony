<?php
/**
 * Created by PhpStorm.
 * User: nagui
 * Date: 25/08/17
 * Time: 12:05
 */
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ProspectRepository")
 * @ORM\Table(name="prospect")
 */
class Prospect extends User
{

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Speciality")
     * @ORM\JoinColumn(nullable=false)
     */

    private $speciality;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Governorate")
     * @ORM\JoinColumn(nullable=false)
     */
    private $governorate;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Activity")
     * @ORM\JoinColumn(nullable=false)
     */
    private $activity;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Potential")
     * @ORM\JoinColumn(nullable=true)
     */
    private $potential;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Delegation")
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