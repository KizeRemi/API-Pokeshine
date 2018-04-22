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

class ShinyController extends FOSRestController
{
    /**
     * @SWG\Tag(name="Shiny")
     * 
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Rest\View(serializerGroups={"shiny-details"})
     */
    public function postShiniesAction(Request $request)
    {
        return $this->container->get('app.shiny.shiny_handler')->post($request->request->all());
    }
}