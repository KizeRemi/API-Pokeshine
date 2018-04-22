<?php
namespace App\Services\Shiny;

use App\Form\ShinyType;
use App\Entity\Shiny;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Doctrine\ORM\EntityManagerInterface;

class ShinyHandler
{
    private $tokenStorage;
    private $formFactory;
    private $entityManager;

    public function __construct(
        TokenStorageInterface $tokenStorage,
        FormFactoryInterface $formFactory,
        EntityManagerInterface $entityManager
    ) {
        $this->tokenStorage = $tokenStorage;
        $this->formFactory = $formFactory;
        $this->entityManager = $entityManager;

    }

    public function post(array $request)
    {
        $shiny = new Shiny();

        return $this->processForm($shiny, $request, 'POST');
    }


    private function processForm(Shiny $shiny, array $request, $method)
    {

        $user = $this->tokenStorage->getToken()->getUser();
        $shiny->setUser($user);
        $form = $this->formFactory->create(ShinyType::class, $shiny, ['method' => $method]);
        $form->submit($request, 'POST');

        if ($form->isValid()) {
            $this->entityManager->persist($shiny);
            $this->entityManager->flush();

            return $shiny;
        }

        return $form;
    }
}
