<?php
namespace App\EventSubscriber;

use App\Entity\TbProducts;
use App\Entity\TbCategory;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Security;

class ProductSubscriber implements EventSubscriberInterface
{
  
    /**
     * @var Security
     */
    
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }


    public static function getSubscribedEvents()
    {
        return [
            BeforeEntityPersistedEvent::class => ['setUser'],
        ];
    }

    public function setUser(BeforeEntityPersistedEvent  $event)
    {
        $entity = $event->getEntityInstance();
        if ($entity instanceof TbProducts) {
            $entity->setUsers($this->security->getUser());
        }

        if ($entity instanceof TbCategory) {
            $entity->setUsers($this->security->getUser());
        }
       // dd($this->security->getUser());
        //dd($entity);
    }
}