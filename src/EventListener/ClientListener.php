<?php


namespace App\EventListener;



use App\Entity\Client;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\Security\Core\Security;

class ClientListener
{
    /**
     * @var Security
     */
    protected $security;

    /**
     * ClientListener constructor.
     * @param Security $security
     */
    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();
        if(!$entity instanceof Client) {
            return;
        }
        $entity->setUser($this->security->getUser());
    }
}
