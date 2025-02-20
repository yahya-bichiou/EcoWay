<?php

namespace ContainerD9dPBDx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PWwl6v6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PWwl6v6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PWwl6v6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'collecteRepository' => ['privates', 'App\\Repository\\CollecteRepository', 'getCollecteRepositoryService', true],
        ], [
            'collecteRepository' => 'App\\Repository\\CollecteRepository',
        ]);
    }
}
