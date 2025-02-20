<?php

namespace ContainerD9dPBDx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BM2L3eUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BM2L3eU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BM2L3eU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'collecteRepository' => ['privates', 'App\\Repository\\CollecteRepository', 'getCollecteRepositoryService', true],
            'depotRepository' => ['privates', 'App\\Repository\\DepotRepository', 'getDepotRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'imageDir' => ['privates', '.value.9qGyjnv', 'get_Value_9qGyjnvService', true],
        ], [
            'collecteRepository' => 'App\\Repository\\CollecteRepository',
            'depotRepository' => 'App\\Repository\\DepotRepository',
            'entityManager' => '?',
            'imageDir' => '?',
        ]);
    }
}
