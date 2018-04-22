<?php
namespace App\Entity;

use JMS\Serializer\Annotation as Serializer;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pokemon
 *
 * @ORM\Table(name="pokemon_type")
 * @ORM\Entity()
 *
 * @Serializer\ExclusionPolicy("all")
 */
class PokemonType
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     * @Serializer\Expose
     * @Serializer\Groups({"pokemon-details", "pokemon-list"})
     */
    protected $id;

    /**
     * @ORM\Column(name="name", type="string", length=25, unique=true)
     * 
     * @Serializer\Expose
     * @Serializer\Groups({"pokemon-details", "pokemon-list"})
     */
    private $name;

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
     * Set name
     *
     * @param string $name
     *
     * @return PokemonType
     */
    public function setName($name): PokemonType
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
