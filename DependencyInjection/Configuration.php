<?php

namespace arsigor\I18nDoctrineBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder,
    Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author David ALLIX
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('arsigor_i18n_doctrine');
        $rootNode = $treeBuilder->root('arsigor_i18n_doctrine');

        $rootNode
            ->children()
                ->scalarNode('manager_registry')
                    ->defaultValue('doctrine')
                ->end()
                ->scalarNode('translatableTrait')
                    ->defaultValue('arsigor\I18nDoctrineBundle\Doctrine\ORM\Util\Translatable')
                ->end()
                ->scalarNode('translationTrait')
                    ->defaultValue('arsigor\I18nDoctrineBundle\Doctrine\ORM\Util\Translation')
                ->end()
                ->enumNode('translatableFetchMode')
                    ->values(array('EAGER', 'EXTRA_LAZY', 'LAZY'))
                    ->defaultValue('LAZY')
                ->end()
                ->enumNode('translationFetchMode')
                    ->values(array('EAGER', 'EXTRA_LAZY', 'LAZY'))
                    ->defaultValue('LAZY')
                ->end()
                ->booleanNode('isRecursive')->defaultTrue()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
