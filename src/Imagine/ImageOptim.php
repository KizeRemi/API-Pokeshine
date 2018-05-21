<?php
namespace App\Imagine;

use App\Entity\User;
use Liip\ImagineBundle\Service\FilterService;

class ImageOptim
{
    public function __construct(FilterService $liip) 
    {
        $this->liip = $liip;
    }

    public function optim(User $user)
    {
        return $resourcePath = $this
            ->liip
            ->getUrlOfFilteredImage('/uploads/avatars/' . $user->getAvatar(), 'avatar');
    }
}
