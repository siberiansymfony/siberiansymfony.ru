<?php
/**
 * Created by PhpStorm.
 * User: cmyst
 * Date: 28.12.15
 * Time: 13:47
 */

namespace Sisy\Twig;

use Symfony\Component\DependencyInjection\ContainerInterface;

class SisyExtension extends \Twig_Extension {

    /** @var ContainerInterface */
    protected $container;

    /**
     * SisyExtension constructor.
     */
    public function __construct (ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getFunctions ()
    {
        return [
            new \Twig_SimpleFunction('routeExists', [$this, 'routeExists']),
        ];
    }

    /**
     * Проверка существования роута
     *
     * @param string $name
     * @return bool
     */
    public function routeExists($name)
    {
        $router = $this->container->get('router');
        return (null === $router->getRouteCollection()->get($name)) ? false : true;
    }

    public function getName ()
    {
        return 'sisy_extension';
    }

}