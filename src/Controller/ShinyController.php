<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;
use App\Entity\User;
use App\Entity\Shiny;

class ShinyController extends FOSRestController
{
    /**
     * @SWG\Tag(name="Shiny")
     * 
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Rest\View(serializerGroups={"shiny-details"})
     *
     * @SWG\Response(
     *     response=201,
     *     description="Create a new account for the user."
     * )
     */
    public function postShiniesAction(Request $request)
    {
        return $this->container->get('app.shiny.shiny_handler')->post($request->request->all());
    }

    /**
     * 
     * @SWG\Tag(name="Shiny")
     *
     * @Rest\QueryParam(
     *     name="generation",
     *     strict=true,
     *     nullable=false,
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
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     *
     * @SWG\Response(
     *     response=201,
     *     description="Create a new account for the user."
     * )
     * 
     * @ParamConverter("user", class="App:User")
     *
     * @Rest\View(serializerGroups={"shinies-list"})
     */
    public function getUsersShiniesAction(User $user, ParamFetcher $paramFetcher)
    {
        return $this->getDoctrine()->getRepository(Shiny::class)->getUserShiniesByGeneration(
            $user,
            $paramFetcher->get('generation'),
            $paramFetcher->get('offset'),
            $paramFetcher->get('limit')
        );

    }
}