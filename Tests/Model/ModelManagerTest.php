<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\DoctrineMongoDBAdminBundle\Tests\Model;

use Sonata\DoctrineMongoDBAdminBundle\Model\ModelManager;
use Sonata\DoctrineMongoDBAdminBundle\Tests\Helpers\PHPUnit_Framework_TestCase;

class ModelManagerTest extends PHPUnit_Framework_TestCase
{
    public function testFilterEmpty()
    {
        $registry = $this->createMock('Symfony\Bridge\Doctrine\ManagerRegistry');

        $manager = new ModelManager($registry);
    }
}
