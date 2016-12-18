<?php

namespace GagneGrosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Score
 *
 * @ORM\Table(name="score")
 * @ORM\Entity(repositoryClass="GagneGrosBundle\Repository\ScoreRepository")
 */
class Score
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
     * @var int
     *
     * @ORM\Column(name="but_mitemp1", type="integer")
     */
    private $butMitemp1;

    /**
     * @var int
     *
     * @ORM\Column(name="but_mitemp2", type="integer")
     */
    private $butMitemp2;

    /**
     * @var int
     *
     * @ORM\Column(name="but_final1", type="integer")
     */
    private $butFinal1;

    /**
     * @var int
     *
     * @ORM\Column(name="but_final2", type="integer")
     */
    private $butFinal2;


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
     * Set butMitemp1
     *
     * @param integer $butMitemp1
     *
     * @return Score
     */
    public function setButMitemp1($butMitemp1)
    {
        $this->butMitemp1 = $butMitemp1;

        return $this;
    }

    /**
     * Get butMitemp1
     *
     * @return int
     */
    public function getButMitemp1()
    {
        return $this->butMitemp1;
    }

    /**
     * Set butMitemp2
     *
     * @param integer $butMitemp2
     *
     * @return Score
     */
    public function setButMitemp2($butMitemp2)
    {
        $this->butMitemp2 = $butMitemp2;

        return $this;
    }

    /**
     * Get butMitemp2
     *
     * @return int
     */
    public function getButMitemp2()
    {
        return $this->butMitemp2;
    }

    /**
     * Set butFinal1
     *
     * @param integer $butFinal1
     *
     * @return Score
     */
    public function setButFinal1($butFinal1)
    {
        $this->butFinal1 = $butFinal1;

        return $this;
    }

    /**
     * Get butFinal1
     *
     * @return int
     */
    public function getButFinal1()
    {
        return $this->butFinal1;
    }

    /**
     * Set butFinal2
     *
     * @param integer $butFinal2
     *
     * @return Score
     */
    public function setButFinal2($butFinal2)
    {
        $this->butFinal2 = $butFinal2;

        return $this;
    }

    /**
     * Get butFinal2
     *
     * @return int
     */
    public function getButFinal2()
    {
        return $this->butFinal2;
    }
}

