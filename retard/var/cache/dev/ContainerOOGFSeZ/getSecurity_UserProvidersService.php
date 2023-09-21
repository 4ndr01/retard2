<?php

namespace ContainerOOGFSeZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_UserProvidersService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.user_providers' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\ChainUserProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/ChainUserProvider.php';

        return $container->privates['security.user_providers'] = new \Symfony\Component\Security\Core\User\ChainUserProvider(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.user.provider.concrete.users_in_memory'] ?? ($container->privates['security.user.provider.concrete.users_in_memory'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([])));
            yield 1 => ($container->privates['security.user_providers'] ?? $container->load('getSecurity_UserProvidersService'));
        }, 2));
    }
}
