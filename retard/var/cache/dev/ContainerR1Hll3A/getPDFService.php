<?php

namespace ContainerR1Hll3A;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPDFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\PDF' shared autowired service.
     *
     * @return \App\PDF
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/PDF.php';

        return $container->privates['App\\PDF'] = new \App\PDF();
    }
}
