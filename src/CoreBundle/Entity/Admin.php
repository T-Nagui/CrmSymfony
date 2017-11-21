<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\AdminRepository")
 */
class Admin extends User
{

}

