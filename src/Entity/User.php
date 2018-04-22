<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use JMS\Serializer\Annotation as Serializer;
use Swagger\Annotations as SWG;
use App\Entity\Pokemon;
use App\Entity\Shiny;

/**
 * 
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 *
 * @Serializer\ExclusionPolicy("all")
 */
class User extends BaseUser
{
    const ROLE_USER = "ROLE_USER";

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @Serializer\Expose
     * @Serializer\Groups({"user-details", "users-list"})
     */
    protected $id;

    /**
      * @SWG\Property(format="string")
      *
      * @Serializer\Expose
      * @Serializer\Groups({"user-details", "users-list"})
      */
    protected $username;

    /**
      * @ORM\Column(type="string", length=25, nullable=true)
      * 
      * @Serializer\Expose
      * @Serializer\Groups({"user-details"})
      */
    private $name;

    /**
      * @ORM\Column(type="string", length=25, nullable=true)
      * 
      * @Serializer\Expose
      * @Serializer\Groups({"user-details"})
      */
    private $lastname;

    /**
      * @ORM\Column(type="date", length=25, nullable=true)
      *
      * @Serializer\Expose
      * @Serializer\Groups({"user-details"})
      */
    private $birthDate;

    /**
      * @ORM\Column(name="friend_code", type="integer", nullable=true)
      *
      * @Serializer\Expose
      * @Serializer\Groups({"user-details"})
      */
    private $friendCode;

    /**
      * @ORM\OneToMany(targetEntity="Shiny", mappedBy="user")
      * 
      * @Serializer\Expose
      * @Serializer\Groups({"user-details"})
      */
    private $shinies;

    public function __construct()
    {
        parent::__construct();
        $this->roles = array(static::ROLE_USER);
        $this->enabled = 1;
        $this->shinies = new ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $friendCode
     *
     * @return User
     */
    public function setFriendCode($friendCode)
    {
        $this->friendCode = $friendCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getFriendCode()
    {
        return $this->friendCode;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return User
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }
    /**
     * @param Shiny $shiny
     *
     * @return User
     */
    public function addShiny(Shiny $shiny)
    {
        $shiny->setUser($this);
        if (!$this->shinies->contains($shiny)) {
            $this->shinies->add($shiny);
        }

        return $this;
    }

    /**
     * @param Shiny $shiny
     */
    public function removeShiny(Shiny $shiny)
    {
        $this->shinies->removeElement($shiny);
    }
    /**
     * @return Collection
     */
    public function getShinies()
    {
        return $this->shinies;
    }
}
