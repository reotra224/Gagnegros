<?php

namespace GagneGrosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParisMatchs
 *
 * @ORM\Table(name="parisMatchs")
 * @ORM\Entity(repositoryClass="GagneGrosBundle\Repository\ParisMatchsRepository")
 */
class ParisMatchs
{
  /**
  * @ORM\Id
  * @ORM\ManyToOne(targetEntity="GagneGrosBundle\Entity\Paris", inversedBy="parisMatchs")
  */
  private $paris;

  /**
  * @ORM\Id
  * @ORM\ManyToOne(targetEntity="GagneGrosBundle\Entity\Matchs")
  */
  private $matchs;

  /**
   * @var string
   *
   * @ORM\Column(name="choix_equipe", type="string", length=15)
   */
  private $choixEquipe;


    /**
     * Set choixEquipe
     *
     * @param string $choixEquipe
     *
     * @return ParisMatchs
     */
    public function setChoixEquipe($choixEquipe)
    {
        $this->choixEquipe = $choixEquipe;

        return $this;
    }

    /**
     * Get choixEquipe
     *
     * @return string
     */
    public function getChoixEquipe()
    {
        return $this->choixEquipe;
    }

    /**
     * Set paris
     *
     * @param \GagneGrosBundle\Entity\Paris $paris
     *
     * @return ParisMatchs
     */
    public function setParis(\GagneGrosBundle\Entity\Paris $paris)
    {
        $this->paris = $paris;

        return $this;
    }

    /**
     * Get paris
     *
     * @return \GagneGrosBundle\Entity\Paris
     */
    public function getParis()
    {
        return $this->paris;
    }

    /**
     * Set matchs
     *
     * @param \GagneGrosBundle\Entity\Matchs $matchs
     *
     * @return ParisMatchs
     */
    public function setMatchs(\GagneGrosBundle\Entity\Matchs $matchs)
    {
        $this->matchs = $matchs;

        return $this;
    }

    /**
     * Get matchs
     *
     * @return \GagneGrosBundle\Entity\Matchs
     */
    public function getMatchs()
    {
        return $this->matchs;
    }
}
