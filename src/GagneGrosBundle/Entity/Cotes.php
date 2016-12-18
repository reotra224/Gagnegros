<?php

namespace GagneGrosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cotes
 *
 * @ORM\Table(name="cotes")
 * @ORM\Entity(repositoryClass="GagneGrosBundle\Repository\CotesRepository")
 */
class Cotes
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
     * @ORM\Column(name="cote_equipe1", type="decimal", precision=5, scale=2)
     */
    private $coteEquipe1;

    /**
     * @var string
     *
     * @ORM\Column(name="cote_equipe2", type="decimal", precision=5, scale=2)
     */
    private $coteEquipe2;

    /**
     * @var string
     *
     * @ORM\Column(name="cote_null", type="decimal", precision=5, scale=2)
     */
    private $coteNull;


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
     * Set coteEquipe1
     *
     * @param string $coteEquipe1
     *
     * @return Cotes
     */
    public function setCoteEquipe1($coteEquipe1)
    {
        $this->coteEquipe1 = $coteEquipe1;

        return $this;
    }

    /**
     * Get coteEquipe1
     *
     * @return string
     */
    public function getCoteEquipe1()
    {
        return $this->coteEquipe1;
    }

    /**
     * Set coteEquipe2
     *
     * @param string $coteEquipe2
     *
     * @return Cotes
     */
    public function setCoteEquipe2($coteEquipe2)
    {
        $this->coteEquipe2 = $coteEquipe2;

        return $this;
    }

    /**
     * Get coteEquipe2
     *
     * @return string
     */
    public function getCoteEquipe2()
    {
        return $this->coteEquipe2;
    }

    /**
     * Set coteNull
     *
     * @param string $coteNull
     *
     * @return Cotes
     */
    public function setCoteNull($coteNull)
    {
        $this->coteNull = $coteNull;

        return $this;
    }

    /**
     * Get coteNull
     *
     * @return string
     */
    public function getCoteNull()
    {
        return $this->coteNull;
    }
}

