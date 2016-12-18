<?php

namespace GagneGrosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matchs
 *
 * @ORM\Table(name="matchs")
 * @ORM\Entity(repositoryClass="GagneGrosBundle\Repository\MatchsRepository")
 */
class Matchs
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
     * @ORM\Column(name="equipe1", type="string", length=100)
     */
    private $equipe1;

    /**
     * @var string
     *
     * @ORM\Column(name="equipe2", type="string", length=100)
     */
    private $equipe2;

    /**
    * @ORM\OneToOne(targetEntity="GagneGrosBundle\Entity\Cotes", cascade={"persist"})
    */
    private $cotesMatchs;

    /**
    * @ORM\OneToOne(targetEntity="GagneGrosBundle\Entity\Score", cascade={"persist"})
    */
    private $scoreMatchs;

    /**
     * @var \Date
     *
     * @ORM\Column(name="date_matchs", type="datetime", nullable=true)
     */
    private $dateMatchs;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_matchs", type="string", length=10)
     */
    private $etatMatchs;

    /**
    * Constructor
    */
    public function __construct(){
      $this->etat_matchs = "EN COUR";
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
     * Set equipe1
     *
     * @param string $equipe1
     *
     * @return Matchs
     */
    public function setEquipe1($equipe1)
    {
        $this->equipe1 = $equipe1;

        return $this;
    }

    /**
     * Get equipe1
     *
     * @return string
     */
    public function getEquipe1()
    {
        return $this->equipe1;
    }

    /**
     * Set equipe2
     *
     * @param string $equipe2
     *
     * @return Matchs
     */
    public function setEquipe2($equipe2)
    {
        $this->equipe2 = $equipe2;

        return $this;
    }

    /**
     * Get equipe2
     *
     * @return string
     */
    public function getEquipe2()
    {
        return $this->equipe2;
    }

    /**
     * Set etatMatchs
     *
     * @param string $etatMatchs
     *
     * @return Matchs
     */
    public function setEtatMatchs($etatMatchs)
    {
        $this->etatMatchs = $etatMatchs;

        return $this;
    }

    /**
     * Get etatMatchs
     *
     * @return string
     */
    public function getEtatMatchs()
    {
        return $this->etatMatchs;
    }


    /**
     * Set cotesMatchs
     *
     * @param \GagneGrosBundle\Entity\Cotes $cotesMatchs
     *
     * @return Matchs
     */
    public function setCotesMatchs(\GagneGrosBundle\Entity\Cotes $cotesMatchs=null)
    {
        $this->cotesMatchs = $cotesMatchs;

        return $this;
    }

    /**
     * Get cotesMatchs
     *
     * @return \GagneGrosBundle\Entity\Cotes
     */
    public function getCotesMatchs()
    {
        return $this->cotesMatchs;
    }

    /**
     * Set dateMatchs
     *
     * @param \DateTime $dateMatchs
     *
     * @return Matchs
     */
    public function setDateMatchs($dateMatchs)
    {
        $this->dateMatchs = $dateMatchs;

        return $this;
    }

    /**
     * Get dateMatchs
     *
     * @return \DateTime
     */
    public function getDateMatchs()
    {
        return $this->dateMatchs;
    }

    /**
     * Set scoreMatchs
     *
     * @param \GagneGrosBundle\Entity\Score $scoreMatchs
     *
     * @return Matchs
     */
    public function setScoreMatchs(\GagneGrosBundle\Entity\Score $scoreMatchs = null)
    {
        $this->scoreMatchs = $scoreMatchs;

        return $this;
    }

    /**
     * Get scoreMatchs
     *
     * @return \GagneGrosBundle\Entity\Score
     */
    public function getScoreMatchs()
    {
        return $this->scoreMatchs;
    }
}
