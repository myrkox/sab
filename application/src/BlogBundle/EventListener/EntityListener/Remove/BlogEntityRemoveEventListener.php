<?php

namespace BlogBundle\EventListener\EntityListener\Remove;

use BlogBundle\Event\EventInterface\BlogBundleEventInterface;
use BlogBundle\EventListener\EntityListener\EntityRemoveEventListenerInterface;

/**
 * Class BlogEntityRemoveEventListener
 * @package BlogBundle\Event\EventListener\EntityListener\Remove
 */
class BlogEntityRemoveEventListener implements EntityRemoveEventListenerInterface
{
    /**
     * @param BlogBundleEventInterface $event
     */
    public function onEntityRemove(BlogBundleEventInterface $event)
    {
        // TODO: Implement onEntityRemove() method.
    }
}
