<?php

namespace ContainerH4rMB8g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuteurControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AuteurController' shared autowired service.
     *
     * @return \App\Controller\AuteurController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AuteurController.php';

        $container->services['App\\Controller\\AuteurController'] = $instance = new \App\Controller\AuteurController(($container->services['doctrine'] ?? $container->getDoctrineService()));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\AuteurController', $container));

        return $instance;
    }
}
