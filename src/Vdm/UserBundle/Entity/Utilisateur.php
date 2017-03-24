<?php

namespace Vdm\UserBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Utilisateur
 */
class Utilisateur extends BaseUser
{

    /**
     * @var \Vdm\VdmBundle\Entity\Message
     */
    private $message;


    /**
     * Set message
     *
     * @param \Vdm\VdmBundle\Entity\Message $message
     *
     * @return Utilisateur
     */
    public function setMessage(\Vdm\VdmBundle\Entity\Message $message = null)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return \Vdm\VdmBundle\Entity\Message
     */
    public function getMessage()
    {
        return $this->message;
    }
}
