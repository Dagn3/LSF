<?php

namespace ContainerBkMXQxl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProvenanceCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\ProvenanceCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\ProvenanceCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\ProvenanceCrudController'] = $instance = new \App\Controller\Admin\ProvenanceCrudController();

        $instance->setContainer(($container->privates['.service_locator.ipvtXDO'] ?? $container->load('get_ServiceLocator_IpvtXDOService'))->withContext('App\\Controller\\Admin\\ProvenanceCrudController', $container));

        return $instance;
    }
}
