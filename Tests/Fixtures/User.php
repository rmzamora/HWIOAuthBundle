<?php

/*
 * This file is part of the HWIOAuthBundle package.
 *
 * (c) Hardware.Info <opensource@hardware.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HWI\Bundle\OAuthBundle\Tests\Fixtures;

use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface
{
    private $githubId;

    public function getId()
    {
        return '1';
    }

    public function getUsername()
    {
        return 'foo';
    }

    public function getRoles()
    {
        return array();
    }

    public function getPassword()
    {
        return 'secret';
    }

    public function getSalt()
    {
        return 'my_salt';
    }

    public function eraseCredentials()
    {
    }

    public function getGithubId()
    {
        return $this->githubId;
    }

    public function setGithubId($githubId)
    {
        $this->githubId = $githubId;
    }
}
