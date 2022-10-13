<?php require __DIR__ . '/vendor/autoload.php';

use App\Model\Organization;
use App\Model\Users\User;

$instance = new User;

$instance->adduser(
    [
        'name' => 'Sajjad',
        'last_name' => 'Vosough',
        'age' => 20,
        'gender' => 'male',
        'phone' => '0987654321',
        'email' => '****@gmail.com'
    ]
)->adduser(
    [
        'name' => 'Amir',
        'last_name' => 'Abron',
        'age' => 20,
        'gender' => 'male',
        'phone' => '0987654321',
        'email' => '****@gmail.com'
    ]
)->adduser(
    [
        'name' => 'Arthur',
        'last_name' => 'Morgan',
        'age' => 24,
        'gender' => 'male',
        'phone' => '0987654321',
        'email' => '****@gmail.com'
    ]
);

dd(Organization::$users);
