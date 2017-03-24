<?php

namespace Vdm\UserBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Utilisateur
 */
class Utilisateur extends BaseUser
{
    /**
     * @var int
     */
    protected $id;


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
     * @var string
     */
    private $pseudo;


    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Utilisateur
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }
    /**
     * @var \Vdm\VdmBundle\Entity\Image
     */
    private $image;


    /**
     * Set image
     *
     * @param \Vdm\VdmBundle\Entity\Image $image
     *
     * @return Utilisateur
     */
    public function setImage(\Vdm\VdmBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Vdm\VdmBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
}
