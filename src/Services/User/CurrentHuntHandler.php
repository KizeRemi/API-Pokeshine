<?php

namespace App\Services\User;

use App\Entity\User;
use App\Form\CurrentHuntType;
use App\Form\CurrentTriesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class CurrentHuntHandler
{
    /** @var EntityManagerInterface */
    private $entityManager;

    /** @var FormFactoryInterface */
    private $formFactory;

    /** @var TokenStorageInterface */
    private $tokenStorage;

    /**
     * @param UserManagerInterface $userManager
     * @param FormFactoryInterface $formFactory
     */
    public function __construct(
        TokenStorageInterface $tokenStorage,
        EntityManagerInterface $entityManager,
        FormFactoryInterface $formFactory
    ) {
        $this->tokenStorage = $tokenStorage;
        $this->entityManager = $entityManager;
        $this->formFactory = $formFactory;
    }

    /**
     * @param array
     */
    public function patch(array $request)
    {
        $user = $this->tokenStorage->getToken()->getUser();
        $form = $this->formFactory->create(CurrentHuntType::class, $user);
        $form->submit($request);
        
        if ($form->isValid()) {
            $user = $form->getData();
            $user->setCurrentTries(0);
            $this->entityManager->persist($user);
            $this->entityManager->flush();

            return $user;
        }

        return $form;
    }

    /**
     * @param array
     */
    public function patchTries(array $request)
    {
        $user = $this->tokenStorage->getToken()->getUser();
        $form = $this->formFactory->create(CurrentTriesType::class, $user);
        $form->submit($request);
        
        if ($form->isValid()) {
            $user = $form->getData();
            $this->entityManager->persist($user);
            $this->entityManager->flush();

            return $user;
        }

        return $form;
    }
}
