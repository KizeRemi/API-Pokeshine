<?php
namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\PokemonType;
use App\DataFixtures\LoadPokemonData;

class LoadPokemonTypeData extends Fixture
{
    public function load(ObjectManager $manager)
    {
    	/* Tableau de tous les types de pokemon à insérer */
	    $types = array(
		    'Acier',
		    'Combat',
		    'Dragon',
		    'Eau',
		    'Electrik',
		    'Fée',
		    'Feu',
		    'Glace',
		    'Insecte',
		    'Normal',
		    'Plante',
		    'Poison',
		    'Psy',
		    'Roche',
		    'Sol',
		    'Spectre',
		    'Ténèbres',
		    'Vol'
		);

	    foreach ($types as $type) {
	      $pokemonType = new PokemonType();
	      $pokemonType->setName($type);
		  $manager->persist($pokemonType);
	      $this->addReference('type_'.$type, $pokemonType);
		}

	    $manager->flush();
	}
}
