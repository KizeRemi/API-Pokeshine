<?php
namespace App\Entity;

use App\Entity\User;
use App\Entity\Pokemon;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Shiny
 *
 * @ORM\Table(name="shiny")
 * @ORM\Entity()
 *
 * @Serializer\ExclusionPolicy("all")
 */
class Shiny
{
    /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      * 
      * @Serializer\Expose
      * @Serializer\Groups({"user-details"})
      */
    protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="User", inversedBy="shinies")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	 */
    private $user;

    /**
      * @ORM\ManyToOne(targetEntity="Pokemon")
      * @ORM\JoinColumn(name="pokemon_id", referencedColumnName="id")
       
      * @Serializer\Expose
      * @Serializer\Groups({"user-details"})
      */
    private $pokemon;

    /**
      * @ORM\Column(name="description", type="string", nullable=true)
      *
      * @Serializer\Expose
      * @Serializer\Groups({"user-details"})
      */
    private $description;

    /**
      * @ORM\Column(name="youtube", type="string", nullable=true)
      * @Assert\Regex(
      *     pattern="/(http(s)??\:\/\/)?(www\.)?((youtube\.com\/watch\?v=)|(youtu.be\/))([a-zA-Z0-9\-_])+$/",
      *     match=false,
      *     message="Your name cannot contain a number"
      * )
      * @Serializer\Expose
      * @Serializer\Groups({"user-details"})
      */
    private $youtube;

    /**
      * @ORM\Column(name="catch_date", type="datetime", nullable=false)
      *
      * @Serializer\Expose
      * @Serializer\Groups({"user-details"})
      */
    private $catchDate;

    /**
    * @ORM\Column(name="created_at", type="datetime", nullable=false)
    */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    public function __construct()
    {
        $this->createdAt = new \DatetimeImmutable();
        $this->updatedAt = new \DateTimeImmutable();
    }

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
     * Set user
     *
     * @param User $user
     *
     * @return Shiny
     */

    public function setUser(User $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set catchDate
     *
     * @param \DateTime $catchDate
     *
     * @return Shiny
     */
    public function setCatchDate($catchDate)
    {
        $this->catchDate = $catchDate;
        return $this;
    }

    /**
     * Get catchDate
     *
     * @return \DateTime
     */
    public function getCatchDate()
    {
        return $this->catchDate;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Shiny
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Shiny
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set pokemon
     *
     * @param Pokemon $pokemon
     *
     * @return Shiny
     */
    public function setPokemon(Pokemon $pokemon)
    {
        $this->pokemon = $pokemon;
        return $this;
    }

    /**
     * Get pokemon
     *
     * @return Pokemon
     */
    public function getPokemon()
    {
        return $this->pokemon;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Shiny
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set youtube
     *
     * @param string $youtube
     *
     * @return Shiny
     */
    public function setYoutube($youtube)
    {
        $this->youtube = $youtube;
        return $this;
    }
    /**
     * Get youtube
     *
     * @return string
     */
    public function getYoutube()
    {
        return $this->youtube;
    }
}