<?php

/*
 * This file is part of the CLSlackBundle.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Treetop1500\Bundle\SlackBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('cl_slack');

        $rootNode
            ->children()
                ->scalarNode('api_token')->defaultNull()->end()
                ->booleanNode('test')->defaultFalse()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
