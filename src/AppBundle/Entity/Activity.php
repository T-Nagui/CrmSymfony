<?php
/**
 * Created by PhpStorm.
 * User: nagui
 * Date: 04/09/17
 * Time: 10:34
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ActivityRepository")
 * @ORM\Table(name="activite")
 */
class Activity
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
     * @var string
     * @return string
     */
    public function __toString()
    {
     return $this->getName();
    }

}