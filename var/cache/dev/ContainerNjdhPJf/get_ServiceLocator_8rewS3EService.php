<?php

namespace ContainerNjdhPJf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8rewS3EService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8rewS3E' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8rewS3E'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'playlist' => ['privates', '.errored..service_locator.8rewS3E.App\\Entity\\Playlist', NULL, 'Cannot autowire service ".service_locator.8rewS3E": it references class "App\\Entity\\Playlist" but no such service exists.'],
        ], [
            'playlist' => 'App\\Entity\\Playlist',
        ]);
    }
}