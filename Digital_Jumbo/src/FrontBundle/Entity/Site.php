<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 *
 * @ORM\Table(name="site")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\SiteRepository")
 */
class Site
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="specificite", type="string", length=255)
     */
    private $specificite;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="degustation", type="string", length=255)
     */
    private $degustation;

    /**
     * @var string
     *
     * @ORM\Column(name="achat", type="string", length=255)
     */
    private $achat;

    /**
     * @var string
     *
     * @ORM\Column(name="responsable", type="string", length=255)
     */
    private $responsable;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text")
     */
    private $commentaire;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="integer")
     */
    private $note;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;

    /**
     * @ORM\ManyToOne(targetEntity="Visite", inversedBy="visites")
     * @ORM\JoinColumn(name="type_visite_id", referencedColumnName="id")
     */
    private $type_visite;

    /**
     * @return mixed
     */
    public function getTypeVisite()
    {
        return $this->type_visite;
    }

    /**
     * @param mixed $type_visite
     */
    public function setTypeVisite($type_visite)
    {
        $this->type_visite = $type_visite;
    }

    /**
     * @return mixed
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * @param mixed $reservation
     */
    public function setReservation($reservation)
    {
        $this->reservation = $reservation;
    }


    /**
     * @ORM\ManyToOne(targetEntity="Reservation", inversedBy="reservations")
     * @ORM\JoinColumn(name="reservation_id", referencedColumnName="id")
     */

    private $reservation;
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
     * Set nom
     *
     * @param string $nom
     * @return Site
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set specificite
     *
     * @param string $specificite
     * @return Site
     */
    public function setSpecificite($specificite)
    {
        $this->specificite = $specificite;

        return $this;
    }

    /**
     * Get specificite
     *
     * @return string 
     */
    public function getSpecificite()
    {
        return $this->specificite;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Site
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set degustation
     *
     * @param string $degustation
     * @return Site
     */
    public function setDegustation($degustation)
    {
        $this->degustation = $degustation;

        return $this;
    }

    /**
     * Get degustation
     *
     * @return string 
     */
    public function getDegustation()
    {
        return $this->degustation;
    }

    /**
     * Set achat
     *
     * @param string $achat
     * @return Site
     */
    public function setAchat($achat)
    {
        $this->achat = $achat;

        return $this;
    }

    /**
     * Get achat
     *
     * @return string 
     */
    public function getAchat()
    {
        return $this->achat;
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     * @return Site
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return string 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Site
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return Site
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Ouverture", inversedBy="ouvertures")
     * @ORM\JoinColumn(name="ouverture_id", referencedColumnName="id")
     */
    private $ouverture;

    /**
     * Set ouverture
     *
     * @param \FrontBundle\Entity\Ouverture $ouverture
     * @return Site
     */
    public function setOuverture(\FrontBundle\Entity\Ouverture $ouverture = null)
    {
        $this->ouverture = $ouverture;

        return $this;
    }

    /**
     * Get ouverture
     *
     * @return \FrontBundle\Entity\Ouverture 
     */
    public function getOuverture()
    {
        return $this->ouverture;
    }
}
