<?php

namespace arsigor\I18nDoctrineBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle,
    Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @author Igor Arsenych
 */
class arsigorI18NDoctrineBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }
}