<?php

namespace Collectify\DataFixtures;

use Collectify\Model\UserRepository;

class UserFixtures extends BaseFixtures
{
    public function getType()
    {
        return UserRepository::TYPE;
    }

    public function getFixtures()
    {
        return array(
            array(
                'firstname' => 'Emilio',
                'lastname' => 'Dre',
                'username' => 'emilio',
                'email' => 'emilio@collectify.dev',
                'password' => '123emilio'
            ),
            array(
                'firstname' => 'Ninon',
                'lastname' => 'Dre',
                'username' => 'ninon',
                'email' => 'ninon@collectify.dev',
                'password' => '123ninon'
            ),
        );
    }
}