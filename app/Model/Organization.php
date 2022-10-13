<?php

namespace App\Model;

abstract class Organization
{
    /**
     * @var string $organizationName
     */
    protected $organizationName = '';

    /**
     * @var array $users
     */
    public static array $users = [];

    public function adduser(array $user)
    {
        self::$users[] = $user;

        return $this;
    }
}