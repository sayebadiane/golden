<?php

namespace ContainerRpNRMcm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\UserSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\UserSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventSubscriber/UserSubscriber.php';

        return $container->privates['App\\EventSubscriber\\UserSubscriber'] = new \App\EventSubscriber\UserSubscriber(($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()));
    }
}
