<?php

namespace App\Services\User;

use App\Entity\User;
use App\Form\AvatarType;
use App\Services\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AvatarHandler
{
    /** @var FileUploader */
    private $uploader;

    /** @var UserManagerInterface */
    private $entityManager;

    /** @var FormFactoryInterface */
    private $formFactory;

    /** @var TokenStorageInterface */
    private $tokenStorage;

    /**
     * @param UserManagerInterface $userManager
     * @param FormFactoryInterface $formFactory
     * @param TokenStorageInterface $tokenStorage
     */
    public function __construct(
        TokenStorageInterface $tokenStorage,
        EntityManagerInterface $entityManager,
        FormFactoryInterface $formFactory,
        FileUploader $uploader
    ) {
        $this->tokenStorage = $tokenStorage;
        $this->entityManager = $entityManager;
        $this->formFactory = $formFactory;
        $this->uploader = $uploader;
    }

    /**
     * @param string
     */
    public function patch(array $request)
    {
        $user = $this->tokenStorage->getToken()->getUser();
        $form = $this->formFactory->create(AvatarType::class, $user);
        $form->submit($request);
        
        if ($form->isValid()) {
            $user = $form->getData();
            $file = $user->getAvatar();
            if ($file instanceof UploadedFile) {
                $fileName = $this->uploader->upload($file);
                $user->setAvatar($fileName);
            }

            $this->entityManager->persist($user);
            $this->entityManager->flush();

            return $user;
        }

        return $form;

    }
}
