<?php

namespace PagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Score
 *
 * @ORM\Table(name="score")
 * @ORM\Entity(repositoryClass="PagesBundle\Repository\ScoreRepository")
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
     * @var string
     *
     * @ORM\Column(name="problem", type="string", length=50)
     */
    private $problem;

    /**
     * @var int
     *
     * @ORM\Column(name="k", type="integer")
     */
    private $k;

    /**
     * @var int
     *
     * @ORM\Column(name="l", type="integer")
     */
    private $l;

    /**
     * @var int
     *
     * @ORM\Column(name="r", type="integer")
     */
    private $r;

    /**
     * @var int
     *
     * @ORM\Column(name="n", type="integer")
     */
    private $n;

    /**
     * @var int
     *
     * @ORM\Column(name="g", type="integer")
     */
    private $g;

    /**
     * @var int
     *
     * @ORM\Column(name="b", type="integer")
     */
    private $b;

    /**
     * @var int
     *
     * @ORM\Column(name="s", type="integer")
     */
    private $s;

    /**
     * @var int
     *
     * @ORM\Column(name="rn", type="integer")
     */
    private $rn;

    /**
     * @var int
     *
     * @ORM\Column(name="rg", type="integer")
     */
    private $rg;

    /**
     * @var int
     *
     * @ORM\Column(name="rb", type="integer")
     */
    private $rb;

    /**
     * @var int
     *
     * @ORM\Column(name="rnb", type="integer")
     */
    private $rnb;

    /**
     * @var int
     *
     * @ORM\Column(name="nb", type="integer")
     */
    private $nb;

    /**
     * @var bool
     *
     * @ORM\Column(name="allowedByAdmin", type="boolean")
     */
    private $allowedByAdmin=false;


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
     * Set problem
     *
     * @param string $problem
     * @return Score
     */
    public function setProblem($problem)
    {
        $this->problem = $problem;
    
        return $this;
    }

    /**
     * Get problem
     *
     * @return string 
     */
    public function getProblem()
    {
        return $this->problem;
    }

    /**
     * Set k
     *
     * @param integer $k
     * @return Score
     */
    public function setK($k)
    {
        $this->k = $k;
    
        return $this;
    }

    /**
     * Get k
     *
     * @return integer 
     */
    public function getK()
    {
        return $this->k;
    }

    /**
     * Set l
     *
     * @param integer $l
     * @return Score
     */
    public function setL($l)
    {
        $this->l = $l;
    
        return $this;
    }

    /**
     * Get l
     *
     * @return integer 
     */
    public function getL()
    {
        return $this->l;
    }

    /**
     * Set r
     *
     * @param integer $r
     * @return Score
     */
    public function setR($r)
    {
        $this->r = $r;
    
        return $this;
    }

    /**
     * Get r
     *
     * @return integer 
     */
    public function getR()
    {
        return $this->r;
    }

    /**
     * Set n
     *
     * @param integer $n
     * @return Score
     */
    public function setN($n)
    {
        $this->n = $n;
    
        return $this;
    }

    /**
     * Get n
     *
     * @return integer 
     */
    public function getN()
    {
        return $this->n;
    }

    /**
     * Set g
     *
     * @param integer $g
     * @return Score
     */
    public function setG($g)
    {
        $this->g = $g;
    
        return $this;
    }

    /**
     * Get g
     *
     * @return integer 
     */
    public function getG()
    {
        return $this->g;
    }

    /**
     * Set b
     *
     * @param integer $b
     * @return Score
     */
    public function setB($b)
    {
        $this->b = $b;
    
        return $this;
    }

    /**
     * Get b
     *
     * @return integer 
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * Set s
     *
     * @param integer $s
     * @return Score
     */
    public function setS($s)
    {
        $this->s = $s;
    
        return $this;
    }

    /**
     * Get s
     *
     * @return integer 
     */
    public function getS()
    {
        return $this->s;
    }

    /**
     * Set rn
     *
     * @param integer $rn
     * @return Score
     */
    public function setRn($rn)
    {
        $this->rn = $rn;
    
        return $this;
    }

    /**
     * Get rn
     *
     * @return integer 
     */
    public function getRn()
    {
        return $this->rn;
    }

    /**
     * Set rg
     *
     * @param integer $rg
     * @return Score
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
    
        return $this;
    }

    /**
     * Get rg
     *
     * @return integer 
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set rb
     *
     * @param integer $rb
     * @return Score
     */
    public function setRb($rb)
    {
        $this->rb = $rb;
    
        return $this;
    }

    /**
     * Get rb
     *
     * @return integer 
     */
    public function getRb()
    {
        return $this->rb;
    }

    /**
     * Set rnb
     *
     * @param integer $rnb
     * @return Score
     */
    public function setRnb($rnb)
    {
        $this->rnb = $rnb;
    
        return $this;
    }

    /**
     * Get rnb
     *
     * @return integer 
     */
    public function getRnb()
    {
        return $this->rnb;
    }

    /**
     * Set nb
     *
     * @param integer $nb
     * @return Score
     */
    public function setNb($nb)
    {
        $this->nb = $nb;
    
        return $this;
    }

    /**
     * Get nb
     *
     * @return integer 
     */
    public function getNb()
    {
        return $this->nb;
    }

    /**
     * Set allowedByAdmin
     *
     * @param boolean $allowedByAdmin
     * @return Score
     */
    public function setAllowedByAdmin($allowedByAdmin)
    {
        $this->allowedByAdmin = $allowedByAdmin;
    
        return $this;
    }

    /**
     * Get allowedByAdmin
     *
     * @return boolean 
     */
    public function getAllowedByAdmin()
    {
        return $this->allowedByAdmin;
    }
}
