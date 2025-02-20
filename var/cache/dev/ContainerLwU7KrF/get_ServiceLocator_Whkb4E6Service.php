<?php

namespace ContainerLwU7KrF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Whkb4E6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.whkb4E6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.whkb4E6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\CategorieController::delete' => ['privates', '.service_locator.aw9RHlF', 'get_ServiceLocator_Aw9RHlFService', true],
            'App\\Controller\\CategorieController::edit' => ['privates', '.service_locator.aw9RHlF', 'get_ServiceLocator_Aw9RHlFService', true],
            'App\\Controller\\CategorieController::index' => ['privates', '.service_locator.DFyL8OH', 'get_ServiceLocator_DFyL8OHService', true],
            'App\\Controller\\CategorieController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CategorieController::show' => ['privates', '.service_locator.j7wOkYK', 'get_ServiceLocator_J7wOkYKService', true],
            'App\\Controller\\CollecteController::delete' => ['privates', '.service_locator.cRM1lY4', 'get_ServiceLocator_CRM1lY4Service', true],
            'App\\Controller\\CollecteController::edit' => ['privates', '.service_locator.cRM1lY4', 'get_ServiceLocator_CRM1lY4Service', true],
            'App\\Controller\\CollecteController::index' => ['privates', '.service_locator.PWwl6v6', 'get_ServiceLocator_PWwl6v6Service', true],
            'App\\Controller\\CollecteController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CollecteController::show' => ['privates', '.service_locator.NUlW_DA', 'get_ServiceLocator_NUlWDAService', true],
            'App\\Controller\\CommandeController::delete' => ['privates', '.service_locator.iR5i4O4', 'get_ServiceLocator_IR5i4O4Service', true],
            'App\\Controller\\CommandeController::edit' => ['privates', '.service_locator.iR5i4O4', 'get_ServiceLocator_IR5i4O4Service', true],
            'App\\Controller\\CommandeController::index' => ['privates', '.service_locator.RXaRRrV', 'get_ServiceLocator_RXaRRrVService', true],
            'App\\Controller\\CommandeController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CommandeController::show' => ['privates', '.service_locator.TqIg1ou', 'get_ServiceLocator_TqIg1ouService', true],
            'App\\Controller\\CommandesBoutiqueController::delete' => ['privates', '.service_locator.mdRzbTj', 'get_ServiceLocator_MdRzbTjService', true],
            'App\\Controller\\CommandesBoutiqueController::edit' => ['privates', '.service_locator.mdRzbTj', 'get_ServiceLocator_MdRzbTjService', true],
            'App\\Controller\\CommandesBoutiqueController::index' => ['privates', '.service_locator.b1cIgDT', 'get_ServiceLocator_B1cIgDTService', true],
            'App\\Controller\\CommandesBoutiqueController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CommandesBoutiqueController::show' => ['privates', '.service_locator.5PLSsQO', 'get_ServiceLocator_5PLSsQOService', true],
            'App\\Controller\\DepotController::delete' => ['privates', '.service_locator.1trYusn', 'get_ServiceLocator_1trYusnService', true],
            'App\\Controller\\DepotController::edit' => ['privates', '.service_locator.1trYusn', 'get_ServiceLocator_1trYusnService', true],
            'App\\Controller\\DepotController::index' => ['privates', '.service_locator.YFg.RHl', 'get_ServiceLocator_YFg_RHlService', true],
            'App\\Controller\\DepotController::new' => ['privates', '.service_locator.icCjkIO', 'get_ServiceLocator_IcCjkIOService', true],
            'App\\Controller\\DepotController::show' => ['privates', '.service_locator.1trYusn', 'get_ServiceLocator_1trYusnService', true],
            'App\\Controller\\LivraisonController::delete' => ['privates', '.service_locator.XA7Hpe0', 'get_ServiceLocator_XA7Hpe0Service', true],
            'App\\Controller\\LivraisonController::edit' => ['privates', '.service_locator.XA7Hpe0', 'get_ServiceLocator_XA7Hpe0Service', true],
            'App\\Controller\\LivraisonController::index' => ['privates', '.service_locator.W.TDhCz', 'get_ServiceLocator_W_TDhCzService', true],
            'App\\Controller\\LivraisonController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LivraisonController::show' => ['privates', '.service_locator.jaZM74n', 'get_ServiceLocator_JaZM74nService', true],
            'App\\Controller\\PageController::delete' => ['privates', '.service_locator.XA7Hpe0', 'get_ServiceLocator_XA7Hpe0Service', true],
            'App\\Controller\\PageController::deletec' => ['privates', '.service_locator.iR5i4O4', 'get_ServiceLocator_IR5i4O4Service', true],
            'App\\Controller\\PageController::deleted' => ['privates', '.service_locator.1trYusn', 'get_ServiceLocator_1trYusnService', true],
            'App\\Controller\\PageController::deletep' => ['privates', '.service_locator.cRM1lY4', 'get_ServiceLocator_CRM1lY4Service', true],
            'App\\Controller\\PageController::indexd' => ['privates', '.service_locator.MdL8Ieh', 'get_ServiceLocator_MdL8IehService', true],
            'App\\Controller\\PageController::indexdf' => ['privates', '.service_locator.YFg.RHl', 'get_ServiceLocator_YFg_RHlService', true],
            'App\\Controller\\PageController::indexo' => ['privates', '.service_locator.Yj1iae4', 'get_ServiceLocator_Yj1iae4Service', true],
            'App\\Controller\\PageController::indexof' => ['privates', '.service_locator.9TEhHiJ', 'get_ServiceLocator_9TEhHiJService', true],
            'App\\Controller\\PhaseController::delete' => ['privates', '.service_locator.6DOGBG1', 'get_ServiceLocator_6DOGBG1Service', true],
            'App\\Controller\\PhaseController::edit' => ['privates', '.service_locator.6DOGBG1', 'get_ServiceLocator_6DOGBG1Service', true],
            'App\\Controller\\PhaseController::index' => ['privates', '.service_locator.rvSyk07', 'get_ServiceLocator_RvSyk07Service', true],
            'App\\Controller\\PhaseController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PhaseController::show' => ['privates', '.service_locator..dhLCXq', 'get_ServiceLocator__DhLCXqService', true],
            'App\\Controller\\PlannigController::delete' => ['privates', '.service_locator.d0a79iM', 'get_ServiceLocator_D0a79iMService', true],
            'App\\Controller\\PlannigController::edit' => ['privates', '.service_locator.d0a79iM', 'get_ServiceLocator_D0a79iMService', true],
            'App\\Controller\\PlannigController::index' => ['privates', '.service_locator.LpTJlK5', 'get_ServiceLocator_LpTJlK5Service', true],
            'App\\Controller\\PlannigController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PlannigController::show' => ['privates', '.service_locator.g4IdwN_', 'get_ServiceLocator_G4IdwNService', true],
            'App\\Controller\\ProduitconController::delete' => ['privates', '.service_locator.Gl3nBvd', 'get_ServiceLocator_Gl3nBvdService', true],
            'App\\Controller\\ProduitconController::edit' => ['privates', '.service_locator.Gl3nBvd', 'get_ServiceLocator_Gl3nBvdService', true],
            'App\\Controller\\ProduitconController::index' => ['privates', '.service_locator.epy_BmF', 'get_ServiceLocator_EpyBmFService', true],
            'App\\Controller\\ProduitconController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ProduitconController::show' => ['privates', '.service_locator.ViXcClx', 'get_ServiceLocator_ViXcClxService', true],
            'App\\Controller\\ProduitsBoutiqueController::delete' => ['privates', '.service_locator.VLYgdnA', 'get_ServiceLocator_VLYgdnAService', true],
            'App\\Controller\\ProduitsBoutiqueController::edit' => ['privates', '.service_locator.VLYgdnA', 'get_ServiceLocator_VLYgdnAService', true],
            'App\\Controller\\ProduitsBoutiqueController::index' => ['privates', '.service_locator.VCynP4u', 'get_ServiceLocator_VCynP4uService', true],
            'App\\Controller\\ProduitsBoutiqueController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ProduitsBoutiqueController::show' => ['privates', '.service_locator.BAdYLWc', 'get_ServiceLocator_BAdYLWcService', true],
            'App\\Controller\\RoleController::delete' => ['privates', '.service_locator.FZv9eWN', 'get_ServiceLocator_FZv9eWNService', true],
            'App\\Controller\\RoleController::edit' => ['privates', '.service_locator.FZv9eWN', 'get_ServiceLocator_FZv9eWNService', true],
            'App\\Controller\\RoleController::index' => ['privates', '.service_locator.LFjXlKs', 'get_ServiceLocator_LFjXlKsService', true],
            'App\\Controller\\RoleController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\RoleController::show' => ['privates', '.service_locator.NjZv6sH', 'get_ServiceLocator_NjZv6sHService', true],
            'App\\Controller\\UtilisateurController::delete' => ['privates', '.service_locator.5iifHkm', 'get_ServiceLocator_5iifHkmService', true],
            'App\\Controller\\UtilisateurController::edit' => ['privates', '.service_locator.zbQO62h', 'get_ServiceLocator_ZbQO62hService', true],
            'App\\Controller\\UtilisateurController::index' => ['privates', '.service_locator.DblVUus', 'get_ServiceLocator_DblVUusService', true],
            'App\\Controller\\UtilisateurController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UtilisateurController::show' => ['privates', '.service_locator.8NzCy4M', 'get_ServiceLocator_8NzCy4MService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\CategorieController:delete' => ['privates', '.service_locator.aw9RHlF', 'get_ServiceLocator_Aw9RHlFService', true],
            'App\\Controller\\CategorieController:edit' => ['privates', '.service_locator.aw9RHlF', 'get_ServiceLocator_Aw9RHlFService', true],
            'App\\Controller\\CategorieController:index' => ['privates', '.service_locator.DFyL8OH', 'get_ServiceLocator_DFyL8OHService', true],
            'App\\Controller\\CategorieController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CategorieController:show' => ['privates', '.service_locator.j7wOkYK', 'get_ServiceLocator_J7wOkYKService', true],
            'App\\Controller\\CollecteController:delete' => ['privates', '.service_locator.cRM1lY4', 'get_ServiceLocator_CRM1lY4Service', true],
            'App\\Controller\\CollecteController:edit' => ['privates', '.service_locator.cRM1lY4', 'get_ServiceLocator_CRM1lY4Service', true],
            'App\\Controller\\CollecteController:index' => ['privates', '.service_locator.PWwl6v6', 'get_ServiceLocator_PWwl6v6Service', true],
            'App\\Controller\\CollecteController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CollecteController:show' => ['privates', '.service_locator.NUlW_DA', 'get_ServiceLocator_NUlWDAService', true],
            'App\\Controller\\CommandeController:delete' => ['privates', '.service_locator.iR5i4O4', 'get_ServiceLocator_IR5i4O4Service', true],
            'App\\Controller\\CommandeController:edit' => ['privates', '.service_locator.iR5i4O4', 'get_ServiceLocator_IR5i4O4Service', true],
            'App\\Controller\\CommandeController:index' => ['privates', '.service_locator.RXaRRrV', 'get_ServiceLocator_RXaRRrVService', true],
            'App\\Controller\\CommandeController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CommandeController:show' => ['privates', '.service_locator.TqIg1ou', 'get_ServiceLocator_TqIg1ouService', true],
            'App\\Controller\\CommandesBoutiqueController:delete' => ['privates', '.service_locator.mdRzbTj', 'get_ServiceLocator_MdRzbTjService', true],
            'App\\Controller\\CommandesBoutiqueController:edit' => ['privates', '.service_locator.mdRzbTj', 'get_ServiceLocator_MdRzbTjService', true],
            'App\\Controller\\CommandesBoutiqueController:index' => ['privates', '.service_locator.b1cIgDT', 'get_ServiceLocator_B1cIgDTService', true],
            'App\\Controller\\CommandesBoutiqueController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CommandesBoutiqueController:show' => ['privates', '.service_locator.5PLSsQO', 'get_ServiceLocator_5PLSsQOService', true],
            'App\\Controller\\DepotController:delete' => ['privates', '.service_locator.1trYusn', 'get_ServiceLocator_1trYusnService', true],
            'App\\Controller\\DepotController:edit' => ['privates', '.service_locator.1trYusn', 'get_ServiceLocator_1trYusnService', true],
            'App\\Controller\\DepotController:index' => ['privates', '.service_locator.YFg.RHl', 'get_ServiceLocator_YFg_RHlService', true],
            'App\\Controller\\DepotController:new' => ['privates', '.service_locator.icCjkIO', 'get_ServiceLocator_IcCjkIOService', true],
            'App\\Controller\\DepotController:show' => ['privates', '.service_locator.1trYusn', 'get_ServiceLocator_1trYusnService', true],
            'App\\Controller\\LivraisonController:delete' => ['privates', '.service_locator.XA7Hpe0', 'get_ServiceLocator_XA7Hpe0Service', true],
            'App\\Controller\\LivraisonController:edit' => ['privates', '.service_locator.XA7Hpe0', 'get_ServiceLocator_XA7Hpe0Service', true],
            'App\\Controller\\LivraisonController:index' => ['privates', '.service_locator.W.TDhCz', 'get_ServiceLocator_W_TDhCzService', true],
            'App\\Controller\\LivraisonController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LivraisonController:show' => ['privates', '.service_locator.jaZM74n', 'get_ServiceLocator_JaZM74nService', true],
            'App\\Controller\\PageController:delete' => ['privates', '.service_locator.XA7Hpe0', 'get_ServiceLocator_XA7Hpe0Service', true],
            'App\\Controller\\PageController:deletec' => ['privates', '.service_locator.iR5i4O4', 'get_ServiceLocator_IR5i4O4Service', true],
            'App\\Controller\\PageController:deleted' => ['privates', '.service_locator.1trYusn', 'get_ServiceLocator_1trYusnService', true],
            'App\\Controller\\PageController:deletep' => ['privates', '.service_locator.cRM1lY4', 'get_ServiceLocator_CRM1lY4Service', true],
            'App\\Controller\\PageController:indexd' => ['privates', '.service_locator.MdL8Ieh', 'get_ServiceLocator_MdL8IehService', true],
            'App\\Controller\\PageController:indexdf' => ['privates', '.service_locator.YFg.RHl', 'get_ServiceLocator_YFg_RHlService', true],
            'App\\Controller\\PageController:indexo' => ['privates', '.service_locator.Yj1iae4', 'get_ServiceLocator_Yj1iae4Service', true],
            'App\\Controller\\PageController:indexof' => ['privates', '.service_locator.9TEhHiJ', 'get_ServiceLocator_9TEhHiJService', true],
            'App\\Controller\\PhaseController:delete' => ['privates', '.service_locator.6DOGBG1', 'get_ServiceLocator_6DOGBG1Service', true],
            'App\\Controller\\PhaseController:edit' => ['privates', '.service_locator.6DOGBG1', 'get_ServiceLocator_6DOGBG1Service', true],
            'App\\Controller\\PhaseController:index' => ['privates', '.service_locator.rvSyk07', 'get_ServiceLocator_RvSyk07Service', true],
            'App\\Controller\\PhaseController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PhaseController:show' => ['privates', '.service_locator..dhLCXq', 'get_ServiceLocator__DhLCXqService', true],
            'App\\Controller\\PlannigController:delete' => ['privates', '.service_locator.d0a79iM', 'get_ServiceLocator_D0a79iMService', true],
            'App\\Controller\\PlannigController:edit' => ['privates', '.service_locator.d0a79iM', 'get_ServiceLocator_D0a79iMService', true],
            'App\\Controller\\PlannigController:index' => ['privates', '.service_locator.LpTJlK5', 'get_ServiceLocator_LpTJlK5Service', true],
            'App\\Controller\\PlannigController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PlannigController:show' => ['privates', '.service_locator.g4IdwN_', 'get_ServiceLocator_G4IdwNService', true],
            'App\\Controller\\ProduitconController:delete' => ['privates', '.service_locator.Gl3nBvd', 'get_ServiceLocator_Gl3nBvdService', true],
            'App\\Controller\\ProduitconController:edit' => ['privates', '.service_locator.Gl3nBvd', 'get_ServiceLocator_Gl3nBvdService', true],
            'App\\Controller\\ProduitconController:index' => ['privates', '.service_locator.epy_BmF', 'get_ServiceLocator_EpyBmFService', true],
            'App\\Controller\\ProduitconController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ProduitconController:show' => ['privates', '.service_locator.ViXcClx', 'get_ServiceLocator_ViXcClxService', true],
            'App\\Controller\\ProduitsBoutiqueController:delete' => ['privates', '.service_locator.VLYgdnA', 'get_ServiceLocator_VLYgdnAService', true],
            'App\\Controller\\ProduitsBoutiqueController:edit' => ['privates', '.service_locator.VLYgdnA', 'get_ServiceLocator_VLYgdnAService', true],
            'App\\Controller\\ProduitsBoutiqueController:index' => ['privates', '.service_locator.VCynP4u', 'get_ServiceLocator_VCynP4uService', true],
            'App\\Controller\\ProduitsBoutiqueController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ProduitsBoutiqueController:show' => ['privates', '.service_locator.BAdYLWc', 'get_ServiceLocator_BAdYLWcService', true],
            'App\\Controller\\RoleController:delete' => ['privates', '.service_locator.FZv9eWN', 'get_ServiceLocator_FZv9eWNService', true],
            'App\\Controller\\RoleController:edit' => ['privates', '.service_locator.FZv9eWN', 'get_ServiceLocator_FZv9eWNService', true],
            'App\\Controller\\RoleController:index' => ['privates', '.service_locator.LFjXlKs', 'get_ServiceLocator_LFjXlKsService', true],
            'App\\Controller\\RoleController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\RoleController:show' => ['privates', '.service_locator.NjZv6sH', 'get_ServiceLocator_NjZv6sHService', true],
            'App\\Controller\\UtilisateurController:delete' => ['privates', '.service_locator.5iifHkm', 'get_ServiceLocator_5iifHkmService', true],
            'App\\Controller\\UtilisateurController:edit' => ['privates', '.service_locator.zbQO62h', 'get_ServiceLocator_ZbQO62hService', true],
            'App\\Controller\\UtilisateurController:index' => ['privates', '.service_locator.DblVUus', 'get_ServiceLocator_DblVUusService', true],
            'App\\Controller\\UtilisateurController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UtilisateurController:show' => ['privates', '.service_locator.8NzCy4M', 'get_ServiceLocator_8NzCy4MService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\CategorieController::delete' => '?',
            'App\\Controller\\CategorieController::edit' => '?',
            'App\\Controller\\CategorieController::index' => '?',
            'App\\Controller\\CategorieController::new' => '?',
            'App\\Controller\\CategorieController::show' => '?',
            'App\\Controller\\CollecteController::delete' => '?',
            'App\\Controller\\CollecteController::edit' => '?',
            'App\\Controller\\CollecteController::index' => '?',
            'App\\Controller\\CollecteController::new' => '?',
            'App\\Controller\\CollecteController::show' => '?',
            'App\\Controller\\CommandeController::delete' => '?',
            'App\\Controller\\CommandeController::edit' => '?',
            'App\\Controller\\CommandeController::index' => '?',
            'App\\Controller\\CommandeController::new' => '?',
            'App\\Controller\\CommandeController::show' => '?',
            'App\\Controller\\CommandesBoutiqueController::delete' => '?',
            'App\\Controller\\CommandesBoutiqueController::edit' => '?',
            'App\\Controller\\CommandesBoutiqueController::index' => '?',
            'App\\Controller\\CommandesBoutiqueController::new' => '?',
            'App\\Controller\\CommandesBoutiqueController::show' => '?',
            'App\\Controller\\DepotController::delete' => '?',
            'App\\Controller\\DepotController::edit' => '?',
            'App\\Controller\\DepotController::index' => '?',
            'App\\Controller\\DepotController::new' => '?',
            'App\\Controller\\DepotController::show' => '?',
            'App\\Controller\\LivraisonController::delete' => '?',
            'App\\Controller\\LivraisonController::edit' => '?',
            'App\\Controller\\LivraisonController::index' => '?',
            'App\\Controller\\LivraisonController::new' => '?',
            'App\\Controller\\LivraisonController::show' => '?',
            'App\\Controller\\PageController::delete' => '?',
            'App\\Controller\\PageController::deletec' => '?',
            'App\\Controller\\PageController::deleted' => '?',
            'App\\Controller\\PageController::deletep' => '?',
            'App\\Controller\\PageController::indexd' => '?',
            'App\\Controller\\PageController::indexdf' => '?',
            'App\\Controller\\PageController::indexo' => '?',
            'App\\Controller\\PageController::indexof' => '?',
            'App\\Controller\\PhaseController::delete' => '?',
            'App\\Controller\\PhaseController::edit' => '?',
            'App\\Controller\\PhaseController::index' => '?',
            'App\\Controller\\PhaseController::new' => '?',
            'App\\Controller\\PhaseController::show' => '?',
            'App\\Controller\\PlannigController::delete' => '?',
            'App\\Controller\\PlannigController::edit' => '?',
            'App\\Controller\\PlannigController::index' => '?',
            'App\\Controller\\PlannigController::new' => '?',
            'App\\Controller\\PlannigController::show' => '?',
            'App\\Controller\\ProduitconController::delete' => '?',
            'App\\Controller\\ProduitconController::edit' => '?',
            'App\\Controller\\ProduitconController::index' => '?',
            'App\\Controller\\ProduitconController::new' => '?',
            'App\\Controller\\ProduitconController::show' => '?',
            'App\\Controller\\ProduitsBoutiqueController::delete' => '?',
            'App\\Controller\\ProduitsBoutiqueController::edit' => '?',
            'App\\Controller\\ProduitsBoutiqueController::index' => '?',
            'App\\Controller\\ProduitsBoutiqueController::new' => '?',
            'App\\Controller\\ProduitsBoutiqueController::show' => '?',
            'App\\Controller\\RoleController::delete' => '?',
            'App\\Controller\\RoleController::edit' => '?',
            'App\\Controller\\RoleController::index' => '?',
            'App\\Controller\\RoleController::new' => '?',
            'App\\Controller\\RoleController::show' => '?',
            'App\\Controller\\UtilisateurController::delete' => '?',
            'App\\Controller\\UtilisateurController::edit' => '?',
            'App\\Controller\\UtilisateurController::index' => '?',
            'App\\Controller\\UtilisateurController::new' => '?',
            'App\\Controller\\UtilisateurController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CategorieController:delete' => '?',
            'App\\Controller\\CategorieController:edit' => '?',
            'App\\Controller\\CategorieController:index' => '?',
            'App\\Controller\\CategorieController:new' => '?',
            'App\\Controller\\CategorieController:show' => '?',
            'App\\Controller\\CollecteController:delete' => '?',
            'App\\Controller\\CollecteController:edit' => '?',
            'App\\Controller\\CollecteController:index' => '?',
            'App\\Controller\\CollecteController:new' => '?',
            'App\\Controller\\CollecteController:show' => '?',
            'App\\Controller\\CommandeController:delete' => '?',
            'App\\Controller\\CommandeController:edit' => '?',
            'App\\Controller\\CommandeController:index' => '?',
            'App\\Controller\\CommandeController:new' => '?',
            'App\\Controller\\CommandeController:show' => '?',
            'App\\Controller\\CommandesBoutiqueController:delete' => '?',
            'App\\Controller\\CommandesBoutiqueController:edit' => '?',
            'App\\Controller\\CommandesBoutiqueController:index' => '?',
            'App\\Controller\\CommandesBoutiqueController:new' => '?',
            'App\\Controller\\CommandesBoutiqueController:show' => '?',
            'App\\Controller\\DepotController:delete' => '?',
            'App\\Controller\\DepotController:edit' => '?',
            'App\\Controller\\DepotController:index' => '?',
            'App\\Controller\\DepotController:new' => '?',
            'App\\Controller\\DepotController:show' => '?',
            'App\\Controller\\LivraisonController:delete' => '?',
            'App\\Controller\\LivraisonController:edit' => '?',
            'App\\Controller\\LivraisonController:index' => '?',
            'App\\Controller\\LivraisonController:new' => '?',
            'App\\Controller\\LivraisonController:show' => '?',
            'App\\Controller\\PageController:delete' => '?',
            'App\\Controller\\PageController:deletec' => '?',
            'App\\Controller\\PageController:deleted' => '?',
            'App\\Controller\\PageController:deletep' => '?',
            'App\\Controller\\PageController:indexd' => '?',
            'App\\Controller\\PageController:indexdf' => '?',
            'App\\Controller\\PageController:indexo' => '?',
            'App\\Controller\\PageController:indexof' => '?',
            'App\\Controller\\PhaseController:delete' => '?',
            'App\\Controller\\PhaseController:edit' => '?',
            'App\\Controller\\PhaseController:index' => '?',
            'App\\Controller\\PhaseController:new' => '?',
            'App\\Controller\\PhaseController:show' => '?',
            'App\\Controller\\PlannigController:delete' => '?',
            'App\\Controller\\PlannigController:edit' => '?',
            'App\\Controller\\PlannigController:index' => '?',
            'App\\Controller\\PlannigController:new' => '?',
            'App\\Controller\\PlannigController:show' => '?',
            'App\\Controller\\ProduitconController:delete' => '?',
            'App\\Controller\\ProduitconController:edit' => '?',
            'App\\Controller\\ProduitconController:index' => '?',
            'App\\Controller\\ProduitconController:new' => '?',
            'App\\Controller\\ProduitconController:show' => '?',
            'App\\Controller\\ProduitsBoutiqueController:delete' => '?',
            'App\\Controller\\ProduitsBoutiqueController:edit' => '?',
            'App\\Controller\\ProduitsBoutiqueController:index' => '?',
            'App\\Controller\\ProduitsBoutiqueController:new' => '?',
            'App\\Controller\\ProduitsBoutiqueController:show' => '?',
            'App\\Controller\\RoleController:delete' => '?',
            'App\\Controller\\RoleController:edit' => '?',
            'App\\Controller\\RoleController:index' => '?',
            'App\\Controller\\RoleController:new' => '?',
            'App\\Controller\\RoleController:show' => '?',
            'App\\Controller\\UtilisateurController:delete' => '?',
            'App\\Controller\\UtilisateurController:edit' => '?',
            'App\\Controller\\UtilisateurController:index' => '?',
            'App\\Controller\\UtilisateurController:new' => '?',
            'App\\Controller\\UtilisateurController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
