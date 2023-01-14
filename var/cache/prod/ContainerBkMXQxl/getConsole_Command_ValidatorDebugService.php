<?php

namespace ContainerBkMXQxl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_ValidatorDebugService extends App_KernelProdContainer
{
    /*
     * Gets the private 'console.command.validator_debug' shared service.
     *
     * @return \Symfony\Component\Validator\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.validator_debug'] = $instance = new \Symfony\Component\Validator\Command\DebugCommand(($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService')));

        $instance->setName('debug:validator');
        $instance->setDescription('Display validation constraints for classes');

        return $instance;
    }
}
