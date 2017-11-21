<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Director
 *
 * @ORM\Table(name="director")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\DirectorRepository")
 */
class Director extends User
{

}

