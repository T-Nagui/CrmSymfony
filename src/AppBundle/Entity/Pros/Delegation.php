<?php
/**
 * Created by PhpStorm.
 * User: nagui
 * Date: 04/09/17
 * Time: 11:17
 */

namespace AppBundle\Entity\Pros;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="delegation")
 */
class Delegation
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pros\Governorate")
     * @ORM\JoinColumn(nullable=false)
     */
    private $governorate;

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
    public function getGovernorate()
    {
        return $this->governorate;
    }

    /**
     * @param mixed $governorate
     */
    public function setGovernorate($governorate)
    {
        $this->governorate = $governorate;
    }


}