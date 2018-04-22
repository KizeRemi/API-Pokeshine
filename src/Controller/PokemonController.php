<?php
namespace App\Controller;

use App\Entity\Pokemon;
use App\Repository\PokemonRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;

class PokemonController extends FOSRestController
{
    /**
     * @Rest\QueryParam(
     *     name="search",
     *     strict=true,
     *     nullable=true,
     *     description="Query"
     * )
     * @Rest\QueryParam(
     *     name="offset",
     *     requirements="\d+",
     *     default="0",
     *     description="Number of first result"
     * )
     * @Rest\QueryParam(
     *     name="limit",
     *     requirements="\d+",
     *     default="50",
     *     description="Number of max result"
     * )
     *
     * @SWG\Response(
     *     response=200,
     *     description="Return all Pokemon.",
     *     @SWG\Schema(
     *         type="array",
     *         @Model(type=Pokemon::class)
     *     )
     * )
     * @SWG\Tag(name="Pokemon")
     *
     * @Rest\View(serializerGroups={"pokemon-list"})
     */
    public function getPokemonsAction(ParamFetcher $paramFetcher)
    {
        $pokemon = $this->container->get('app.repository.pokemon_repository')->getPokemons(
            $paramFetcher->get('offset'),
            $paramFetcher->get('limit')
        );

        return $pokemon;
    }

    /**
     * @SWG\Response(
     *     response=200,
     *     description="Return a pokemon informations.",
     *     @SWG\Schema(
     *         type="array",
     *         @Model(type=Pokemon::class)
     *     )
     * )
	 * @SWG\Response(response="404",description="Pokemon not found")
     * @SWG\Tag(name="Pokemon")
     * 
     * @ParamConverter("pokemon", class="App:Pokemon")
     *
     * @Rest\View(serializerGroups={"pokemon-details"})
     */
    public function getPokemonAction(Pokemon $pokemon)
    {
        return $pokemon;
    }
}