<?php

namespace ContainerQGayi6E;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IzpIetVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IzpIetV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IzpIetV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'seanceRepository' => ['privates', 'App\\Repository\\SeanceRepository', 'getSeanceRepositoryService', true],
            'skillRepository' => ['privates', 'App\\Repository\\SkillRepository', 'getSkillRepositoryService', true],
        ], [
            'seanceRepository' => 'App\\Repository\\SeanceRepository',
            'skillRepository' => 'App\\Repository\\SkillRepository',
        ]);
    }
}