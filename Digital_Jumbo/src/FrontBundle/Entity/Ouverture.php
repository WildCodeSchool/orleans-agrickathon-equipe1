<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ouverture
 *
 * @ORM\Table(name="ouverture")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\OuvertureRepository")
 */
class Ouverture
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
     * @var \DateTime
     *
     * @ORM\Column(name="jour_debut", type="date")
     */
    private $jourDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="jour_fin", type="date")
     */
    private $jourFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_debut", type="time")
     */
    private $heureDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_fin", type="time")
     */
    private $heureFin;


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
     * Set jourDebut
     *
     * @param \DateTime $jourDebut
     * @return Ouverture
     */
    public function setJourDebut($jourDebut)
    {
        $this->jourDebut = $jourDebut;

        return $this;
    }

    /**
     * Get jourDebut
     *
     * @return \DateTime 
     */
    public function getJourDebut()
    {
        return $this->jourDebut;
    }

    /**
     * Set jourFin
     *
     * @param \DateTime $jourFin
     * @return Ouverture
     */
    public function setJourFin($jourFin)
    {
        $this->jourFin = $jourFin;

        return $this;
    }

    /**
     * Get jourFin
     *
     * @return \DateTime 
     */
    public function getJourFin()
    {
        return $this->jourFin;
    }

    /**
     * Set heureDebut
     *
     * @param \DateTime $heureDebut
     * @return Ouverture
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get heureDebut
     *
     * @return \DateTime 
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set heureFin
     *
     * @param \DateTime $heureFin
     * @return Ouverture
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get heureFin
     *
     * @return \DateTime 
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }
}
