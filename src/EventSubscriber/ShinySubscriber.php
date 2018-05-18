<?php
namespace App\EventSubscriber;

use App\Entity\Shiny;
use App\Discord\SendMessageToChannel;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Doctrine\ORM\Events;

/**
 * Class ShinySubscriber
 */
class ShinySubscriber implements EventSubscriber
{
    const API_ENDPOINT = 'http://www.pokeshine.remi-mavillaz.fr/uploads/shinies/';

    /** @var SendMessageToChannel */
    private $sendMessageToChannel;

    /**
     * ShinySubscriber constructor.
     *
     * @param SendMessageToChannel $sendMessageToChannel
     */
    public function __construct(SendMessageToChannel $sendMessageToChannel) {
        $this->sendMessageToChannel = $sendMessageToChannel;
    }

    /**
     * {@inheritdoc}
     */
    public function getSubscribedEvents()
    {
        return [
            Events::preUpdate,
        ];
    }

    /**
     * @param PreUpdateEventArgs $args
     */
    public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args->getEntity();
        if (!$entity instanceof Shiny) {
            return;
        }

        if ($args->getOldValue('validation') === false && $entity->isValidation() === true) {
            $user = $entity->getUser();
            $pokemon = $entity->getPokemon();
            $this->sendMessageToChannel->post(
                [
                    'content' => 'Le Shiny Hunter ' . $user->getUsername() . ' a capturé un ' . $pokemon->getname() . ' shiny. Félicitations! ' . self::API_ENDPOINT . $entity->getImage(),
                ]
            );
        }
    }
}
