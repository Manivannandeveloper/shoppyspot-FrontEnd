<?php

namespace ContainerYflr8bn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_N8IjcLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.n8Ijc_L' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.n8Ijc_L'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'product' => ['privates', '.errored..service_locator.n8Ijc_L.App\\Entity\\TbProducts', NULL, 'Cannot autowire service ".service_locator.n8Ijc_L": it references class "App\\Entity\\TbProducts" but no such service exists.'],
        ], [
            'product' => 'App\\Entity\\TbProducts',
        ]);
    }
}
