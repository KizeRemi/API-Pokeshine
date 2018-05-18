<?php
namespace App\Services\Shiny;

use App\Form\ShinyType;
use App\Entity\Shiny;
use App\Services\FileUploader;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ShinyHandler
{
    /** @var FileUploader */
    private $uploader;
    
    /** @var UserManagerInterface */
    private $entityManager;

    /** @var FormFactoryInterface */
    private $formFactory;

    /** @var TokenStorageInterface */
    private $tokenStorage;

    public function __construct(
        TokenStorageInterface $tokenStorage,
        FormFactoryInterface $formFactory,
        EntityManagerInterface $entityManager,
        FileUploader $uploader
    ) {
        $this->tokenStorage = $tokenStorage;
        $this->formFactory = $formFactory;
        $this->entityManager = $entityManager;
        $this->uploader = $uploader;
    }

    public function post(array $request)
    {
        $shiny = new Shiny();
        $user = $this->tokenStorage->getToken()->getUser();
        $shiny->setUser($user);

        return $this->processForm($shiny, $request, 'POST');
    }

    private function processForm(Shiny $shiny, array $request, $method)
    {
        $form = $this->formFactory->create(ShinyType::class, $shiny, ['method' => $method]);
        $form->submit($request);

        if ($form->isValid()) {
            $shiny = $form->getData();
            $file = $shiny->getImage();
            if ($file instanceof UploadedFile) {
                $fileName = $this->uploader->upload($file);
                $shiny->setImage($fileName);
            }
            $this->entityManager->persist($shiny);
            $this->entityManager->flush();

            return $shiny;
        }

        return $form;
    }
}
