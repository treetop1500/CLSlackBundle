<?php

namespace Treetop1500\Bundle\SlackBundle\Tests\DependencyInjection\Compiler;

use Treetop1500\Bundle\SlackBundle\CLSlackBundle;
use Treetop1500\Bundle\SlackBundle\DependencyInjection\Compiler\RegisterApiClientPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class BundleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_registers_the_expected_compiler_pass()
    {
        $found     = false;
        $container = new ContainerBuilder();
        $bundle    = new CLSlackBundle();
        $bundle->build($container);

        foreach ($container->getCompilerPassConfig()->getPasses() as $pass) {
            if ($pass instanceof RegisterApiClientPass) {
                $found = true;

                break;
            }
        }

        $this->assertTrue($found);
    }
}
