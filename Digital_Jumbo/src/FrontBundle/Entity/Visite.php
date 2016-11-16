<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visite
 *
 * @ORM\Table(name="visite")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\VisiteRepository")
 */
class Visite
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="adulte", type="string", length=255)
     */
    private $adulte;

    /**
     * @var string
     *
     * @ORM\Column(name="tout_public", type="string", length=255)
     */
    private $toutPublic;


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
     * Set type
     *
     * @param string $type
     * @return Visite
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set adulte
     *
     * @param string $adulte
     * @return Visite
     */
    public function setAdulte($adulte)
    {
        $this->adulte = $adulte;

        return $this;
    }

    /**
     * Get adulte
     *
     * @return string 
     */
    public function getAdulte()
    {
        return $this->adulte;
    }

    /**
     * Set toutPublic
     *
     * @param string $toutPublic
     * @return Visite
     */
    public function setToutPublic($toutPublic)
    {
        $this->toutPublic = $toutPublic;

        return $this;
    }

    /**
     * Get toutPublic
     *
     * @return string 
     */
    public function getToutPublic()
    {
        return $this->toutPublic;
    }
}
