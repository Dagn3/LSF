<?php

namespace App\EventSubscriber;

use App\Entity\Fromage;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityDeletedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityUpdatedEvent;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class Easyadmin implements EventSubscriberInterface
{
    private $tokenStorage;
    private $slugger;
    private $passwordEncoder;
    private $entityManager;

    public function __construct(SluggerInterface $slugger,
                                EntityManagerInterface $entityManager,
                                UserPasswordEncoderInterface $passwordEncoder,
                                TokenStorageInterface $tokenStorage
                                )
    {
        $this->slugger = $slugger;
        $this->entityManager = $entityManager;
        $this->passwordEncoder = $passwordEncoder;
        $this->tokenStorage = $tokenStorage;
    }

    public static function getSubscribedEvents()
    {
        return [

            BeforeEntityPersistedEvent::class=>['addUser'],
            BeforeEntityDeletedEvent::class=>['delFromImage'],
            BeforeEntityUpdatedEvent::class => ['updateUser'],
            BeforeEntityUpdatedEvent::class => ['updateFrom'],

            BeforeEntityDeletedEvent::class => ['DelUser'],
        ];
    }
   

    public function delUser(BeforeEntityDeletedEvent $event){

        $entity = $event->getEntityInstance();
        $user = $this->tokenStorage->getToken()->getUser();

        if ($entity instanceof User) {
            if ($entity->getPseudo() == $user->getUserIdentifier()) {
                session_destroy();
            }
        }

     }



    public function delFromImage(BeforeEntityDeletedEvent $event)
    {
        $entity = $event->getEntityInstance();

        if (!($entity instanceof Fromage)) {
            return;
        }

        $entity->setSlug($entity->getNom());

        $entity->setDisplay(1);

        $image = $entity->getImage();

        $fichier = "uploads/fromages/$image";

        unlink($fichier);

    }

    public function updateFrom(BeforeEntityUpdatedEvent $event): void
    {
        $entity = $event->getEntityInstance();

        if (($entity instanceof Fromage)) {
            $nom = $entity->getNom();
       
            $entity->setSlug(strtolower(str_replace(' ', '-', $nom)));
        }
     
    }
    

    public function updateUser(BeforeEntityUpdatedEvent $event): void
    {
        $entity = $event->getEntityInstance();

        if (($entity instanceof User)) {
            if($entity->getPassword() == null){
                $this->setPassword($entity);
        }

        if(($entity instanceof Fromage)) {
            $entity->setDisplay(1);

            $nom = $entity->getNom();
        
            $entity->setSlug(strtolower(str_replace(' ', '-', $nom)));
        }
     
    }
    }

    


    public function addUser(BeforeEntityPersistedEvent $event)
    {
        $entity = $event->getEntityInstance();

        if (($entity instanceof User)) {
            $this->setPassword($entity);
        }
        if(($entity instanceof Fromage)) {
            $entity->setDisplay(1);

            $nom = $entity->getNom();
        
            $entity->setSlug(strtolower(str_replace(' ', '-', $nom)));
        }
   

        
    }

   /**
       * @param User $entity
       */
      public function setPassword(User $entity): void
      {
          $pass = $entity->getPassword();

          $entity->setPassword(
              $this->passwordEncoder->encodePassword(
                  $entity,
                  $pass
              )
          );
          $this->entityManager->persist($entity);
          $this->entityManager->flush();
      }

}

