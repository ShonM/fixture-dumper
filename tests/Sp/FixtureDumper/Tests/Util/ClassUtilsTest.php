<?php

/*
 * This file is part of the FixtureDumper library.
 *
 * (c) Martin Parsiegla <martin.parsiegla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sp\FixtureDumper\Tests\Util;

use Sp\FixtureDumper\Util\ClassUtils;

/**
 * @author Martin Parsiegla <martin.parsiegla@gmail.com>
 */
class ClassUtilsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider classNameProvider
     */
    public function testGetClassName($className, $expectedNamespace, $expectedClass)
    {
        $result = ClassUtils::getClassName($className);
        $this->assertEquals($expectedClass, $result);
    }

    /**
     * @dataProvider classNameProvider
     */
    public function testGetNamespace($className, $expectedNamespace, $expectedClass)
    {
        $result = ClassUtils::getNamespace($className);
        $this->assertEquals($expectedNamespace, $result);
    }

    public function classNameProvider()
    {
        return array(
            array('\Acme\Demo\Entity\Post', '\Acme\Demo\Entity', 'Post'),
            array('Acme\Test\Service\SomeService', 'Acme\Test\Service', 'SomeService'),
            array('MyClass', '', 'MyClass')
        );
    }
}
