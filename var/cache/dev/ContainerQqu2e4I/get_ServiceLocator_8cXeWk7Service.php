<?php

namespace ContainerQqu2e4I;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8cXeWk7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8cXeWk7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8cXeWk7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'skill' => ['privates', '.errored..service_locator.8cXeWk7.App\\Entity\\Skill', NULL, 'Cannot autowire service ".service_locator.8cXeWk7": it references class "App\\Entity\\Skill" but no such service exists.'],
        ], [
            'skill' => 'App\\Entity\\Skill',
        ]);
    }
}
