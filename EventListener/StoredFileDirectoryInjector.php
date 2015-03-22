<?php

namespace ScoutEvent\DataBundle\EventListener;

use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use ScoutEvent\DataBundle\Entity\StoredFile;

class StoredFileDirectoryInjector implements EventSubscriber
{

    private $rootDir;
    
    public function __construct($rootDir)
    {
        $this->rootDir = $rootDir;
    }

    public function getSubscribedEvents()
    {
        return array(
            'preRemove',
            'postPersist',
            'postUpdate'
        );
    }
    
    private function upload(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $entityManager = $args->getEntityManager();

        if ($entity instanceof StoredFile) {
            $entity->setRootDir($this->rootDir);
            $entity->upload();
        }
    }
    
    public function postPersist(LifecycleEventArgs $args)
    {
        $this->upload($args);
    }
    
    public function postUpdate(LifecycleEventArgs $args)
    {
        $this->upload($args);
    }
    
    public function preRemove(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $entityManager = $args->getEntityManager();

        if ($entity instanceof StoredFile) {
            $entity->setRootDir($this->rootDir);
            $entity->storeFilenameForRemove();
        }
    }
}
