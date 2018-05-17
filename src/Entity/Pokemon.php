<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Entity\PokemonType;

/**
 * Pokemon
 *
 * @ORM\Table(name="pokemon")
 * @ORM\Entity(repositoryClass="App\Repository\PokemonRepository")
 *
 */
class Pokemon
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     * @Groups({"pokemon-details", "shiny-details", "user-details"})
     */
    protected $id;

    /**
     * @ORM\Column(name="number", type="integer", nullable=false, unique=true)
     * 
     * @Groups({"pokemon-details", "shinies-list", "shiny-details", "user-details"})
     */
    private $number;

    /**
     * @ORM\Column(name="generation", type="integer", nullable=false)
     *
     * @Groups({"pokemon-details", "shinies-list", "shiny-details", "user-details"})
     */
    private $generation;
    
    /**
     * @ORM\Column(name="name", type="string", nullable=false)
     *
    * @Groups({"pokemon-details", "shinies-list", "shiny-details", "user-details"})
     */
    private $name;

    /**
     * @ORM\Column(name="description", type="text", nullable=false)
     *
     * @Groups({"pokemon-details"})
     */
    private $description;

    /**
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @ORM\ManyToMany(targetEntity="PokemonType", cascade={"persist"})
     * @Assert\NotNull()
     * @Assert\Count(
     *      min = 1,
     *      max = 2,
     *      minMessage = "Vous devez spécifier au moins {{ limit }} type",
     *      maxMessage = "Vous ne pouvez sépcifier plus de {{ limit }} types"
     * )
     *
     * @Groups({"pokemon-details", "shinies-list", "user-details"})
     */
    private $pokemonTypes;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function __toString()
    {
        return $this->name;
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
     * @param string $number
     *
     * @return Pokemon
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Pokemon
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
     * Set description
     *
     * @param string $description
     *
     * @return Pokemon
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Pokemon
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
     * @param PokemonType $pokemonType
     *
     * @return Pokemon
     */
    public function addPokemonType(PokemonType $pokemonType)
    {
        $this->pokemonTypes[] = $pokemonType;
        return $this;
    }

    /**
     * @param PokemonType $pokemonType
     */
    public function removePokemonType(PokemonType $pokemonType)
    {
        $this->pokemonTypes->removeElement($pokemonType);
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPokemonTypes()
    {
        return $this->pokemonTypes;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Pokemon
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
     * Set generation
     *
     * @param integer $generation
     *
     * @return Pokemon
     */
    public function setGeneration($generation)
    {
        $this->generation = $generation;
        return $this;
    }

    /**
     * Get generation
     *
     * @return integer
     */
    public function getGeneration()
    {
        return $this->generation;
    }
}
