<?php

namespace AgIm\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AgIm\AgenceBundle\Entity\AnnonceRepository")
 */
class Annonce {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="Medias", mappedBy="annonce", cascade={"remove", "persist"})
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\OneToMany(targetEntity="AgIm\AgenceBundle\Entity\Medias", mappedBy="annonce", cascade={"all"})
     */
    private $medias;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text" ,nullable=true)
     */
    private $description;

    /**
     *  @ORM\Column(type="date")
     */
    private $date_creation;

    /**
     *  @ORM\Column(type="date")
     */
    private $date_echeance;

    /**
     *  @ORM\Column(type="string",length=255)
     */
    private $ville;

    /**
     *  @ORM\Column(type="string",length=255)
     */
    private $rue;

    /**
     *  @ORM\Column(type="string",length=255)
     */
    private $etat;

    /**
     *  @ORM\Column(type="string",length=255)
     */
    private $code_postal;

    /**
     *  @ORM\Column(type="string",length=255)
     */
    private $prix;

    /**
     *  @ORM\Column(type="string",length=255)
     */
    private $telephone;

    /**
     *  @ORM\Column(type="string",length=255)
     */
    private $type;

    /**
     *  @ORM\Column(type="string",length=255)
     */
    private $nombre_piece;

    /**
     *  @ORM\Column(type="integer")
     */
    private $nombre_like;

    /**
     *  @ORM\Column(type="integer")
     */
    private $nombre_dislike;
    protected $files;

    public function getFiles() {
        return $this->files;
    }

    public function setFiles(array $files) {
        $this->files = $files;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Annonce
     */
    public function setTitre($titre) {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Annonce
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set date_creation
     *
     * @param \DateTime $dateCreation
     * @return Annonce
     */
    public function setDateCreation($dateCreation) {
        $this->date_creation = $dateCreation;

        return $this;
    }

    /**
     * Get date_creation
     *
     * @return \DateTime 
     */
    public function getDateCreation() {
        return $this->date_creation;
    }

    /**
     * Set date_echeance
     *
     * @param \DateTime $dateEcheance
     * @return Annonce
     */
    public function setDateEcheance($dateEcheance) {
        $this->date_echeance = $dateEcheance;

        return $this;
    }

    /**
     * Get date_echeance
     *
     * @return \DateTime 
     */
    public function getDateEcheance() {
        return $this->date_echeance;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Annonce
     */
    public function setVille($ville) {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille() {
        return $this->ville;
    }

    /**
     * Set rue
     *
     * @param string $rue
     * @return Annonce
     */
    public function setRue($rue) {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get rue
     *
     * @return string 
     */
    public function getRue() {
        return $this->rue;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Annonce
     */
    public function setEtat($etat) {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat() {
        return $this->etat;
    }

    /**
     * Set code_postal
     *
     * @param string $codePostal
     * @return Annonce
     */
    public function setCodePostal($codePostal) {
        $this->code_postal = $codePostal;

        return $this;
    }

    /**
     * Get code_postal
     *
     * @return string 
     */
    public function getCodePostal() {
        return $this->code_postal;
    }

    /**
     * Set prix
     *
     * @param string $prix
     * @return Annonce
     */
    public function setPrix($prix) {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix() {
        return $this->prix;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Annonce
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Annonce
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set nombre_piece
     *
     * @param string $nombrePiece
     * @return Annonce
     */
    public function setNombrePiece($nombrePiece) {
        $this->nombre_piece = $nombrePiece;

        return $this;
    }

    /**
     * Get nombre_piece
     *
     * @return string 
     */
    public function getNombrePiece() {
        return $this->nombre_piece;
    }

    /**
     * Set nombre_like
     *
     * @param integer $nombreLike
     * @return Annonce
     */
    public function setNombreLike($nombreLike) {
        $this->nombre_like = $nombreLike;

        return $this;
    }

    /**
     * Get nombre_like
     *
     * @return integer 
     */
    public function getNombreLike() {
        return $this->nombre_like;
    }

    /**
     * Set nombre_dislike
     *
     * @param integer $nombreDislike
     * @return Annonce
     */
    public function setNombreDislike($nombreDislike) {
        $this->nombre_dislike = $nombreDislike;

        return $this;
    }

    /**
     * Get nombre_dislike
     *
     * @return integer 
     */
    public function getNombreDislike() {
        return $this->nombre_dislike;
    }

    /**
     * Set image
     *
     * @param \AgIm\AgenceBundle\Entity\Medias $image
     * @return Annonce
     */
    public function setImage(\AgIm\AgenceBundle\Entity\Medias $image) {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \AgIm\AgenceBundle\Entity\Medias 
     */
    public function getImage() {
        return $this->image;
    }
    
    /**
     * Constructor
     */
    public function __construct() {
        $this->medias = new \Doctrine\Common\Collections\ArrayCollection();
        //$files = array();
    }

    /**
     * Add medias
     *
     * @param \AgIm\AgenceBundle\Entity\Medias $medias
     * @return Annonce
     */
    public function addMedia(\AgIm\AgenceBundle\Entity\Medias $medias) {
        $this->medias[] = $medias;

        return $this;
    }

    /**
     * Remove medias
     *
     * @param \AgIm\AgenceBundle\Entity\Medias $medias
     */
    public function removeMedia(\AgIm\AgenceBundle\Entity\Medias $medias) {
        $this->medias->removeElement($medias);
    }

    /**
     * Get medias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMedias() {
        return $this->medias;
    }

}
