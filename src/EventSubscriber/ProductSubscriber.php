<?php
namespace App\EventSubscriber;

use App\Entity\TbProducts;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class EasyAdminSubscriber implements EventSubscriberInterface
{
    private $slugger;

    public function __construct($slugger)
    {
        $this->slugger = $slugger;
    }

    public static function getSubscribedEvents()
    {
        return [
            BeforeEntityPersistedEvent::class => ['setUser'],
        ];
    }

    public function setUser(BeforeEntityPersistedEvent $event)
    {
        dd($event);
    }


    // public function setBlogPostSlug(BeforeEntityPersistedEvent $event)
    // {
    //     $entity = $event->getEntityInstance();

    //     if (!($entity instanceof BlogPost)) {
    //         return;
    //     }

    //     $slug = $this->slugger->slugify($entity->getTitle());
    //     $entity->setSlug($slug);
    // }
}