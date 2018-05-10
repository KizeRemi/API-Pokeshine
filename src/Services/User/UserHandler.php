<?php
namespace App\Services\User;

use App\Entity\User;
use App\Form\UserType;
use App\Form\UpdateUserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use FOS\UserBundle\Model\UserManagerInterface;

class UserHandler
{
    private $formFactory;
    private $userManager;
    private $tokenStorage;

    public function __construct(
        TokenStorageInterface $tokenStorage,
        FormFactoryInterface $formFactory,
        UserManagerInterface $userManager
    )
    {
        $this->tokenStorage = $tokenStorage;
        $this->formFactory = $formFactory;
        $this->userManager = $userManager;
    }

    public function post(array $request)
    {
        $user = $this->userManager->createUser();;

        return $this->processForm($user, $request, 'POST');
    }

    public function patch(array $request)
    {
        $user = $this->tokenStorage->getToken()->getUser();
        $form = $this->formFactory->create(UpdateUserType::class, $user);
        $form->submit($request, false);

        if ($form->isValid()) {
            $user = $form->getData();
            $this->userManager->updateUser($user);

            return $user;
        }

        return $form;
    }

    private function processForm(User $user, array $request, $method)
    {
        $form = $this->formFactory->create(UserType::class, $user, ['method' => $method]);
        $form->submit($request, 'POST' !== $method);

        if ($form->isValid()) {
            $user = $form->getData();
            $this->userManager->updateUser($user);

            return $user;
        }

        return $form;
    }
}
