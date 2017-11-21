<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supervisor
 *
 * @ORM\Table(name="supervisor")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\SupervisorRepository")
 */
class Supervisor extends User
{

}

