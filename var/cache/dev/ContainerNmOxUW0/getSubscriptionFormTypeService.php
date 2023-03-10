<?php

namespace ContainerNmOxUW0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSubscriptionFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\SubscriptionFormType' shared autowired service.
     *
     * @return \App\Form\SubscriptionFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/SubscriptionFormType.php';

        return $container->privates['App\\Form\\SubscriptionFormType'] = new \App\Form\SubscriptionFormType();
    }
}
