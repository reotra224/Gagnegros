<?php

namespace GagneGrosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paris
 *
 * @ORM\Table(name="paris")
 * @ORM\Entity(repositoryClass="GagneGrosBundle\Repository\ParisRepository")
 */
class Paris
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
     * @ORM\ManyToOne(targetEntity="GagneGrosBundle\Entity\Utilisateur", inversedBy="paris")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity="GagneGrosBundle\Entity\Matchs", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $listeMatchs;

    /**
    * @ORM\OneToMany(targetEntity="GagneGrosBundle\Entity\ParisMatchs", mappedBy="paris")
    */
    private $parisMatchs; //Attribut permettant de récuppérer le choix de l'utilisateur pour chaque match

    /**
     * @var string
     *
     * @ORM\Column(name="cote_paris", type="decimal", precision=10, scale=5)
     */
    private $coteParis;

    /**
     * @var int
     *
     * @ORM\Column(name="mise_paris", type="integer")
     */
    private $miseParis;

    /**
     * @var int
     *
     * @ORM\Column(name="gain_paris", type="integer")
     */
    private $gainParis;

    /**
     * @var bool
     *
     * @ORM\Column(name="resultat_paris", type="boolean", nullable=true)
     */
    private $resultatParis;

    /**
    * Constructor
    */
    public function __construct()
    {
      $this->listeMatchs = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set coteParis
     *
     * @param string $coteParis
     *
     * @return Paris
     */
    public function setCoteParis($coteParis)
    {
        $this->coteParis = $coteParis;

        return $this;
    }

    /**
     * Get coteParis
     *
     * @return string
     */
    public function getCoteParis()
    {
        return $this->coteParis;
    }

    /**
     * Set miseParis
     *
     * @param integer $miseParis
     *
     * @return Paris
     */
    public function setMiseParis($miseParis)
    {
        $this->miseParis = $miseParis;

        return $this;
    }

    /**
     * Get miseParis
     *
     * @return int
     */
    public function getMiseParis()
    {
        return $this->miseParis;
    }

    /**
     * Set gainParis
     *
     * @param integer $gainParis
     *
     * @return Paris
     */
    public function setGainParis($gainParis)
    {
        $this->gainParis = $gainParis;

        return $this;
    }

    /**
     * Get gainParis
     *
     * @return int
     */
    public function getGainParis()
    {
        return $this->gainParis;
    }

    /**
     * Set resultatParis
     *
     * @param boolean $resultatParis
     *
     * @return Paris
     */
    public function setResultatParis($resultatParis)
    {
        $this->resultatParis = $resultatParis;

        return $this;
    }

    /**
     * Get resultatParis
     *
     * @return bool
     */
    public function getResultatParis()
    {
        return $this->resultatParis;
    }

    /**
     * Set user
     *
     * @param \GagneGrosBundle\Entity\Utilisateur $user
     *
     * @return Paris
     */
    public function setUser(\GagneGrosBundle\Entity\Utilisateur $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \GagneGrosBundle\Entity\Utilisateur
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add listeMatch
     *
     * @param \GagneGrosBundle\Entity\Matchs $listeMatch
     *
     * @return Paris
     */
    public function addListeMatch(\GagneGrosBundle\Entity\Matchs $listeMatch)
    {
        $this->listeMatchs[] = $listeMatch;

        return $this;
    }

    /**
     * Remove listeMatch
     *
     * @param \GagneGrosBundle\Entity\Matchs $listeMatch
     */
    public function removeListeMatch(\GagneGrosBundle\Entity\Matchs $listeMatch)
    {
        $this->listeMatchs->removeElement($listeMatch);
    }

    /**
     * Get listeMatchs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListeMatchs()
    {
        return $this->listeMatchs;
    }

    /**
     * Add parisMatch
     *
     * @param \GagneGrosBundle\Entity\ParisMatchs $parisMatch
     *
     * @return Paris
     */
    public function addParisMatch(\GagneGrosBundle\Entity\ParisMatchs $parisMatch)
    {
        $this->parisMatchs[] = $parisMatch;
        $parisMatch->setParis($this);

        return $this;
    }

    /**
     * Remove parisMatch
     *
     * @param \GagneGrosBundle\Entity\ParisMatchs $parisMatch
     */
    public function removeParisMatch(\GagneGrosBundle\Entity\ParisMatchs $parisMatch)
    {
        $this->parisMatchs->removeElement($parisMatch);
    }

    /**
     * Get parisMatchs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParisMatchs()
    {
        return $this->parisMatchs;
    }
}
