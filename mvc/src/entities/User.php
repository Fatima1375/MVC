<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity @ORM\Table(name="user")
 **/
class User 
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;
    /** @ORM\Column(type="string") **/
    private $nom;
    /** @ORM\Column(type="string") **/
    private $penom; 
    /** @ORM\Column(type="string") **/
    private $email; 
    /** @ORM\Column(type="string") **/
    private $password;
    /**
     * One user has many lieux. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Lieu", mappedBy="user")
     */
    private $lieux;
    /**
     * Many Users have Many Roles.
     * @ORM\ManyToMany(targetEntity="Roles", inversedBy="users")
     * @ORM\JoinTable(name="users_roles")
     */
    private $roles;
    

    public function __construct()
    {
        $this->lieux = new ArrayCollection();
        $this->roles = new ArrayCollection();
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

    //Pour le prenom de la formation
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    //Pour l'email
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    //Pour le password
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    //Pour la liste des lieux
    public function getLieux()
    {
        return $this->lieux;
    }
    public function setLieux($lieux)
    {
        $this->lieux = $lieux;
    }

    //Pour la liste des roles
    public function getRoles()
    {
        return $this->roles;
    }
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }
}



?>