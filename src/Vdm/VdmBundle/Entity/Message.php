<?php

namespace Vdm\VdmBundle\Entity;

/**
 * Message
 */
class Message
{
    public function __construct()
    {
        $this->dateCreate = new \Datetime();
    }

    /****************************************************/
    //                GENERATED CODE                    //
    /****************************************************/

        /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $contenu;

    /**
     * @var \DateTime
     */
    private $dateCreate;

    /**
     * @var \Vdm\VdmBundle\Entity\Categorie
     */
    private $categorie;

    /**
     * @var \Vdm\UserBundle\Entity\Utilisateur
     */
    private $utilisateur;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Message
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Message
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return Message
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Get dateCreate
     *
     * @return \DateTime
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * Set categorie
     *
     * @param \Vdm\VdmBundle\Entity\Categorie $categorie
     *
     * @return Message
     */
    public function setCategorie(\Vdm\VdmBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Vdm\VdmBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set utilisateur
     *
     * @param \Vdm\UserBundle\Entity\Utilisateur $utilisateur
     *
     * @return Message
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
     * @var \Vdm\VdmBundle\Entity\Image
     */
    private $image;


    /**
     * Set image
     *
     * @param \Vdm\VdmBundle\Entity\Image $image
     *
     * @return Message
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
