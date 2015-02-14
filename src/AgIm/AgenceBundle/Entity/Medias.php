<?php

namespace AgIm\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medias
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Medias {

    /**

     * @ORM\Column(name="id", type="integer")

     * @ORM\Id

     * @ORM\GeneratedValue(strategy="AUTO")

     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AgIm\AgenceBundle\Entity\Annonce", inversedBy="medias")
     */
    protected $annonce;

    /**

     * @ORM\Column(name="url", type="string", length=255)

     */
    private $url;

    /**

     * @ORM\Column(name="alt", type="string", length=255)

     */
    private $alt;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Medias
     */
    public function setUrl($url) {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return Medias
     */
    public function setAlt($alt) {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt() {
        return $this->alt;
    }


    /**
     * Set annonce
     *
     * @param \AgIm\AgenceBundle\Entity\Annonce $annonce
     * @return Medias
     */
    public function setAnnonce(\AgIm\AgenceBundle\Entity\Annonce $annonce = null)
    {
        $this->annonce = $annonce;

        return $this;
    }

    /**
     * Get annonce
     *
     * @return \AgIm\AgenceBundle\Entity\Annonce 
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }
}
