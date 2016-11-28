<?php

namespace CdiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="CdiBundle\Repository\ArticleRepository")
 */
class Article
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="text")
     */
    private $resume;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateParution", type="datetime")
     */
    private $dateParution;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroPeriodique", type="string", length=255)
     */
    private $numeroPeriodique;

    /**
     * @var string
     *
     * @ORM\Column(name="pageDebut", type="string", length=255, nullable=true)
     */
    private $pageDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="pageFin", type="string", length=255, nullable=true)
     */
    private $pageFin;

    /**
     * @ORM\ManyToOne(targetEntity="CdiBundle\Entity\Auteur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $auteur;

    /**
     * @ORM\ManyToOne(targetEntity="CdiBundle\Entity\Periodique")
     * @ORM\JoinColumn(nullable=false)
     */
    private $periodique;


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
     * Set titre
     *
     * @param string $titre
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set resume
     *
     * @param string $resume
     * @return Article
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string 
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set dateParution
     *
     * @param \DateTime $dateParution
     * @return Article
     */
    public function setDateParution($dateParution)
    {
        $this->dateParution = $dateParution;

        return $this;
    }

    /**
     * Get dateParution
     *
     * @return \DateTime 
     */
    public function getDateParution()
    {
        return $this->dateParution;
    }

    /**
     * Set numeroPeriodique
     *
     * @param string $numeroPeriodique
     * @return Article
     */
    public function setNumeroPeriodique($numeroPeriodique)
    {
        $this->numeroPeriodique = $numeroPeriodique;

        return $this;
    }

    /**
     * Get numeroPeriodique
     *
     * @return string 
     */
    public function getNumeroPeriodique()
    {
        return $this->numeroPeriodique;
    }

    /**
     * Set pageDebut
     *
     * @param string $pageDebut
     * @return Article
     */
    public function setPageDebut($pageDebut)
    {
        $this->pageDebut = $pageDebut;

        return $this;
    }

    /**
     * Get pageDebut
     *
     * @return string 
     */
    public function getPageDebut()
    {
        return $this->pageDebut;
    }

    /**
     * Set pageFin
     *
     * @param string $pageFin
     * @return Article
     */
    public function setPageFin($pageFin)
    {
        $this->pageFin = $pageFin;

        return $this;
    }

    /**
     * Get pageFin
     *
     * @return string 
     */
    public function getPageFin()
    {
        return $this->pageFin;
    }

    /**
     * Set auteur
     *
     * @param Auteur $auteur
     * @return Article
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return Auteur
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set periodique
     *
     * @param Periodique $periodique
     * @return Article
     */
    public function setPeriodique($periodique)
    {
        $this->periodique = $periodique;

        return $this;
    }

    /**
     * Get periodique
     *
     * @return Periodique
     */
    public function getPeriodique()
    {
        return $this->periodique;
    }
}
