<?php

namespace ContainerBkMXQxl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\MessageType' shared autowired service.
     *
     * @return \App\Form\MessageType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\MessageType'] = new \App\Form\MessageType();
    }
}
