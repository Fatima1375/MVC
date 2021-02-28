<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity @ORM\Table(name="lieu")
 **/
class Lieu 
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;
    /** @ORM\Column(type="string") **/
    private $nom;
    /** @ORM\Column(type="decimal") **/
    private $longitude; 
    /** @ORM\Column(type="decimal") **/
    private $latitude; 
    /**
     * One lieu has many formations. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Formation", mappedBy="lieu")
     */
    private $formations;
    /**
     * Many Lieux have one user. This is the owning side.
     * @ORM\ManyToOne(targetEntity="User", inversedBy="lieux")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    

    public function __construct()
    {
        $this->formations = new ArrayCollection();
    }
    //Pour l'id
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    //Pour le nom de la formation
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    //Pour la longitude
    public function getLongitude()
    {
        return $this->longitude;
    }
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    //Pour la latitude
    public function getLatitude()
    {
        return $this->latitude;
    }
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    //Pour la liste des formations
    public function getFormations()
    {
        return $this->formation;
    }
    public function setFormations($formations)
    {
        $this->formations = $formations;
    }

    //Pour l'utilisateur
    public function getUser()
    {
        return $this->user;
    }
    public function setUser($user)
    {
        $this->user = $user;
    }
}



?>