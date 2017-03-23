<?php

namespace Vdm\VdmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Image
 */
class Image
{
    public function __toString()
    {
        return $this->url;
    }

    /**
    * @Assert\Image(
    *     maxSize = "1k",
    *     mimeTypes = {"image/*"},
    *     maxSizeMessage = "The maximum allowed file size is 1MB.",
    *     mimeTypesMessage = "Please upload a valid Image.")
    */
    public $fichierCharge;

    protected function getUploadDir()
    {
        return 'uploads/images';
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    public function getWebPath()
    {
        return null === $this->url ? null : $this->getUploadDir().'/'.$this->url;
    }

    public function getAbsolutePath()
    {
        return null === $this->url ? null : $this->getUploadRootDir().'/'.$this->url;
    }

    /**
     * @ORM\PrePersist
     */
    public function preUpload()
    {
        if (null !== $this->fichierCharge) {
            // do whatever you want to generate a unique name
            $this->url = uniqid().'.'.$this->fichierCharge->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist
     */
    public function upload()
    {
        if (null === $this->fichierCharge) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->fichierCharge->move($this->getUploadRootDir(), $this->url);

        unset($this->fichierCharge);
    }

    /**
     * @ORM\PostRemove
     */
    public function removeUpload()
    {
        if ($fichierCharge = $this->getAbsolutePath()) {
            $this->url = null;
            unlink($fichierCharge);
        }
    }

    //***************************************//
    //                                       //
    //           GENERATED CODE              //
    //                                       //
    //***************************************//

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $alt;


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
     * Set url
     *
     * @param string $url
     *
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return Image
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }
}
