<?php

namespace App\Model;

use App\DataBase;

abstract class Organization extends DataBase
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

    public static function query()
    {
        return new static;
    }

    public function saveUsers()
    {
        $query = "insert into `users` (`first_name`, `last_name`) VALUES ";

        foreach (self::$users as $value) {
            $query .= " ('" . $value["name"] . "' , ";

            $query .= " '" . $value["last_name"] . "' ), ";
        }

        $query = trim($query, ', ') . ';';

        return $this->exe($query)->fetchAll();
    }

    public function users()
    {
        $query = 'select * from users';

        return $this->exe($query)->fetchAll();
    }
}
