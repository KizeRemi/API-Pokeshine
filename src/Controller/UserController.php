<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;

class UserController extends FOSRestController
{
    /**
     * Get all enabled users
     * 
     * @SWG\Response(
     *     response=200,
     *     description="Return all enabled users.",
     *     @SWG\Schema(
     *         type="array",
     *         @Model(type=User::class)
     *     )
     * )
     * @SWG\Tag(name="Users")
     *
     * @Rest\View(serializerGroups={"users-list"})
     */
    public function getUsersAction()
    {
        $users = $this->container->get('app.repository.user_repository')->findAll();

        return $users;
    }

    /**
     * Get an enabled users
     * 
     * @SWG\Response(
     *     response=200,
     *     description="Return an enabled user informations.",
     *     @SWG\Schema(
     *         type="array",
     *         @Model(type=User::class)
     *     )
     * )
	 * @SWG\Response(response="404",description="User not found")
     * @SWG\Tag(name="Users")
     * 
     * @ParamConverter("user", class="App:User")
     *
     * @Rest\View(serializerGroups={"user-details"})
     */
    public function getUserAction(User $user)
    {
        return $user;
    }

    /**
     * Create an account.
     * 
     * @SWG\Response(
     *     response=201,
     *     description="Create a new account for the user."
     * )
     * @SWG\Parameter(name="user", in="body", type="object", description="The field used for the user password",
     *     @SWG\Schema(type="object",
     *          @SWG\Property(type="string", property="username", type="string", example="John Doe", description="username" ),
     *          @SWG\Property(type="string", property="email", type="string", example="Johndoe@email.fr"),
     *          @SWG\Property(type="object", property="plainPassword",
     *               @SWG\Property(type="string", property="first", type="string", example="12345"),
     *               @SWG\Property(type="string", property="second", type="string", example="12345")
     *          )
     *     )
     * )
     * @SWG\Tag(name="Users")
     * 
     */
    public function postUsersAction(Request $request)
    {
        return $this->container->get('app.user.user_handler')->post($request->request->all());
    }

    /**
     * Updaye an account.
     * 
     * @SWG\Response(
     *     response=201,
     *     description="Update an account for the user."
     * )
     * @SWG\Parameter(name="user", in="body", type="object", description="The body of the user",
     *     @SWG\Schema(type="object",
     *          @SWG\Property(type="string", property="friendCode", type="string", example="1111-1111-1111-1111", description="friend code" ),
     *     )
     * )
     * @SWG\Tag(name="Users")
     * 
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Rest\View(serializerGroups={"user-details"})
     */
    public function patchUsersAction(Request $request)
    {
        return $this->container->get('app.user.user_handler')->patch($request->request->all());
    }
}