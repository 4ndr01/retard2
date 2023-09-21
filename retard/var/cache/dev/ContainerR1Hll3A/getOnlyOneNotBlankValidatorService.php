<?php

namespace ContainerR1Hll3A;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOnlyOneNotBlankValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\OnlyOneNotBlankValidator' shared autowired service.
     *
     * @return \App\OnlyOneNotBlankValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/OnlyOneNotBlankValidator.php';

        return $container->privates['App\\OnlyOneNotBlankValidator'] = new \App\OnlyOneNotBlankValidator();
    }
}