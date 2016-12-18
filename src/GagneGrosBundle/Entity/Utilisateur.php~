<?php

namespace GagneGrosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="GagneGrosBundle\Repository\UtilisateurRepository")
 */
class Utilisateur
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
     * @ORM\Column(name="nom_user", type="string", length=255)
     */
    private $nomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_user", type="string", length=255)
     */
    private $prenomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo_user", type="string", length=100, nullable=true, unique=true)
     */
    private $pseudoUser;

    /**
     * @var string
     *
     * @ORM\Column(name="email_user", type="string", length=100, nullable=true)
     */
    private $emailUser;

    /**
    * @ORM\OneToOne(targetEntity="GagneGrosBundle\Entity\Image", cascade={"persist"}, inversedBy="user")
    */
    private $image;

    /**
    * @ORM\OneToMany(targetEntity="GagneGrosBundle\Entity\Paris", mappedBy="user")
    */
    private $paris; //Liste des paris de l'utilisateur

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->paris = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nomUser
     *
     * @param string $nomUser
     *
     * @return Utilisateur
     */
    public function setNomUser($nomUser)
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    /**
     * Get nomUser
     *
     * @return string
     */
    public function getNomUser()
    {
        return $this->nomUser;
    }

    /**
     * Set prenomUser
     *
     * @param string $prenomUser
     *
     * @return Utilisateur
     */
    public function setPrenomUser($prenomUser)
    {
        $this->prenomUser = $prenomUser;

        return $this;
    }

    /**
     * Get prenomUser
     *
     * @return string
     */
    public function getPrenomUser()
    {
        return $this->prenomUser;
    }

    /**
     * Set pseudoUser
     *
     * @param string $pseudoUser
     *
     * @return Utilisateur
     */
    public function setPseudoUser($pseudoUser)
    {
        $this->pseudoUser = $pseudoUser;

        return $this;
    }

    /**
     * Get pseudoUser
     *
     * @return string
     */
    public function getPseudoUser()
    {
        return $this->pseudoUser;
    }

    /**
     * Set emailUser
     *
     * @param string $emailUser
     *
     * @return Utilisateur
     */
    public function setEmailUser($emailUser)
    {
        $this->emailUser = $emailUser;

        return $this;
    }

    /**
     * Get emailUser
     *
     * @return string
     */
    public function getEmailUser()
    {
        return $this->emailUser;
    }

    /**
     * Set image
     *
     * @param \GagneGrosBundle\Entity\Image $image
     *
     * @return Utilisateur
     */
    public function setImage(\GagneGrosBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \GagneGrosBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

     /**
     * Add pari
     *
     * @param \GagneGrosBundle\Entity\Paris $pari
     *
     * @return Utilisateur
     */
    public function addPari(\GagneGrosBundle\Entity\Paris $pari)
    {
        $this->paris[] = $pari;
        $paris->setUser($this);
        return $this;
    }

    /**
     * Remove pari
     *
     * @param \GagneGrosBundle\Entity\Paris $pari
     */
    public function removePari(\GagneGrosBundle\Entity\Paris $pari)
    {
        $this->paris->removeElement($pari);
    }

    /**
     * Get paris
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParis()
    {
        return $this->paris;
    }
}
