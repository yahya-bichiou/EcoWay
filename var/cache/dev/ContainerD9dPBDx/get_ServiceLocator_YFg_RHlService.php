<?php

namespace ContainerD9dPBDx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YFg_RHlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YFg.RHl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YFg.RHl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'collecteRepository' => ['privates', 'App\\Repository\\CollecteRepository', 'getCollecteRepositoryService', true],
            'depotRepository' => ['privates', 'App\\Repository\\DepotRepository', 'getDepotRepositoryService', true],
        ], [
            'collecteRepository' => 'App\\Repository\\CollecteRepository',
            'depotRepository' => 'App\\Repository\\DepotRepository',
        ]);
    }
}
