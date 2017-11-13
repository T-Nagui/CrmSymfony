<?php
/**
 * Created by PhpStorm.
 * User: nagui
 * Date: 28/08/17
 * Time: 12:45
 */


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="speciality")
 */
class Speciality
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Groupe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $groupe;

    /**
     * @return mixed
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * @param mixed $groupe
     */
    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;
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
    public function __toString()
    {
       return  $this->getName();
    }
}