<?php

namespace App\Model;

use App\Users\User;

abstract class Organization
{
    /**
     * @var string $organizationName
     */
    protected $organizationName = '';

    /**
     * @var array $users
     */
    private static array $users = [];

    public function adduser(array $user)
    {
        self::$users[] = $user;
    }
}