<?php

namespace ContainerLwU7KrF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VCynP4uService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VCynP4u' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VCynP4u'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'commandesBoutiqueRepository' => ['privates', 'App\\Repository\\CommandesBoutiqueRepository', 'getCommandesBoutiqueRepositoryService', true],
            'produitsBoutiqueRepository' => ['privates', 'App\\Repository\\ProduitsBoutiqueRepository', 'getProduitsBoutiqueRepositoryService', true],
        ], [
            'commandesBoutiqueRepository' => 'App\\Repository\\CommandesBoutiqueRepository',
            'produitsBoutiqueRepository' => 'App\\Repository\\ProduitsBoutiqueRepository',
        ]);
    }
}
