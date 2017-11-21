<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visitor
 *
 * @ORM\Table(name="visitor")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\VisitorRepository")
 */
class Visitor extends User
{

}

