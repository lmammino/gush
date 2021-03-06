<?php

/**
 * This file is part of Gush package.
 *
 * (c) 2013-2014 Luis Cordova <cordoval@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Gush\Tests\Command\PullRequest;

use Gush\Tests\Command\BaseTestCase;

class PullRequestLabelListCommandTest extends BaseTestCase
{
    public function testCommand()
    {
        $tester = $this->getCommandTester(new \Gush\Command\PullRequest\PullRequestLabelListCommand());
        $tester->execute(['--org' => 'gushphp', '--repo' => 'gush'], ['interactive' => false]);

        $this->assertEquals('bug', trim($tester->getDisplay(true)));
    }
}
