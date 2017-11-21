<?php

namespace CoreBundle\Traits;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use JMS\Serializer\Annotation as JMS;

/**
 * Class Traceable
 * @package ProspectBundle\Traits
 */

trait Traceable
{
    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    protected $createdAt;
    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    protected $updatedAt;

    /**
     * @var \CoreBundle\Entity\User $createdBy
     *
     * @Gedmo\Blameable(on="create")
     * @ORM\ManyToOne(targetEntity="CoreBundle\Entity\User")
     * @ORM\JoinColumn(name="created_by", referencedColumnName="id")
     * @JMS\MaxDepth(1)
     */
    protected $createdBy;

    /**
     * @var \CoreBundle\Entity\User $updatedBy
     *
     * @Gedmo\Blameable(on="update")
     * @ORM\ManyToOne(targetEntity="CoreBundle\Entity\User")
     * @ORM\JoinColumn(name="updated_by", referencedColumnName="id", onDelete="SET NULL")
     * @JMS\MaxDepth(1)
     */
    protected $updatedBy;

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return \CoreBundle\Entity\User
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param \CoreBundle\Entity\User $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return \CoreBundle\Entity\User
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * @param \CoreBundle\Entity\User $updatedBy
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;
    }
    /**
     *
     */
    public function __construct()
    {
        if ($this->getCreatedAt() == null) {
            $this->setCreatedAt(new \DateTime('now'));
        }

    }

}
