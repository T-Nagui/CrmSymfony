<?php
/**
 * Created by PhpStorm.
 * User: nagui
 * Date: 28/08/17
 * Time: 14:50
 */

namespace CoreBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="governorate")
 */
class Governorate
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
     * @ORM\ManyToOne(targetEntity="CoreBundle\Entity\Sector")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sector;

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
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * @param mixed $sector
     */
    public function setSector(Sector $sector)
    {
        $this->sector = $sector;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    public function __toString()
    {
 return $this->getName();
     }
}