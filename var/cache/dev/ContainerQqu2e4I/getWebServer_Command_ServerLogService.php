<?php

namespace ContainerQqu2e4I;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebServer_Command_ServerLogService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'web_server.command.server_log' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerLogCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-server-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ServerLogCommand.php';

        $container->privates['web_server.command.server_log'] = $instance = new \Symfony\Bundle\WebServerBundle\Command\ServerLogCommand();

        $instance->setName('server:log');

        return $instance;
    }
}
