<?php
/**
 * Created by PhpStorm.
 * User: nagui
 * Date: 25/08/17
 * Time: 12:05
 */
namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ProspectRepository")
 * @ORM\Table(name="prospect")
 */
class Prospect extends User
{

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