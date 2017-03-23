<?php

namespace Vdm\VdmBundle\Entity;

/**
 * LikeMessage
 */
class LikeMessage
{
    /**
     * @var int
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var \Vdm\UserBundle\Entity\Utilisateur
     */
    private $utilisateur;

    /**
     * @var \Vdm\VdmBundle\Entity\Message
     */
    private $message;


    /**
     * Set utilisateur
     *
     * @param \Vdm\UserBundle\Entity\Utilisateur $utilisateur
     *
     * @return LikeMessage
     */
    public function setUtilisateur(\Vdm\UserBundle\Entity\Utilisateur $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Vdm\UserBundle\Entity\Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set message
     *
     * @param \Vdm\VdmBundle\Entity\Message $message
     *
     * @return LikeMessage
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
