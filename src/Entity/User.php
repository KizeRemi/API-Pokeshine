<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Swagger\Annotations as SWG;
use App\Entity\Pokemon;
use App\Entity\Shiny;

/**
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User extends BaseUser
{
    const ROLE_USER = "ROLE_USER";

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @Groups({"user-details", "users-list"})
     */
    protected $id;

    /**
      * @SWG\Property(format="string")
      *
      * @Groups({"user-details", "users-list"})
      */
    protected $username;

    /**
      * @ORM\Column(type="string", length=25, nullable=true)
      * 
      * @Groups({"user-details"})
      */
    private $name;

    /**
      * @ORM\Column(type="string", length=25, nullable=true)
      * 
      * @Groups({"user-details"})
      */
    private $lastname;

    /**
      * @ORM\Column(type="integer", length=2, nullable=true)
      *
      * @Groups({"user-details"})
      */
    private $age;

    /**
      * @ORM\Column(name="friend_code", type="bigint", length=255, nullable=true)
      *
      * @Groups({"user-details"})
      */
    private $friendCode;

    /**
      * @ORM\Column(name="region", type="string", nullable=true)
      *
      * @Groups({"user-details"})
      */
      private $region;

    /**
      * @ORM\OneToMany(targetEntity="Shiny", mappedBy="user")
      */
    private $shinies;

    /**
     * @ORM\Column(name="avatar", type="string", length=255, nullable=true)
     * @Groups({"user-details", "users-list"})
     * @Assert\File(
     *     mimeTypes = {"image/png", "image/jpeg"},
     *     groups = {"avatar"}
     * )
     */
    private $avatar;

    /**
      * @ORM\ManyToOne(targetEntity="Pokemon")
      * @ORM\JoinColumn(name="current_hunt", referencedColumnName="id")
      * @Groups({"user-details"})
      */
    private $currentHunt;

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
     * Set Age
     *
     * @param int $age
     *
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set Region
     *
     * @param string region
     *
     * @return User
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
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
     * @return ArrayCollection
     */
    public function getShinies(): ArrayCollection
    {
        return $this->shinies;
    }

    /**
     * @Groups({"user-details", "users-list"})
     */
    public function getNbrShinies(): integer
    {
        $shinies = $this->shinies->filter(function(Shiny $shiny) {
            return $shiny->isValidation();
        });

        return count($shinies);
    }

    /**
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param string
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * Set currentHunt
     *
     * @param Pokemon $pokemon
     *
     * @return User
     */
    public function setCurrentHunt(Pokemon $pokemon): User
    {
        $this->currentHunt = $pokemon;

        return $this;
    }

    /**
     * Get currentHunt
     *
     * @return Pokemon
     */
    public function getCurrentHunt()
    {
        return $this->currentHunt;
    }
}
