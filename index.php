<?php require __DIR__ . '/vendor/autoload.php';

use App\Model\Users\User;

$_1 = new User;

$_1->adduser(
    [
        'name' => 'Sajjad',
        'last_name' => 'Vosough',
        'age' => 20,
        'gender' => 'male',
        'phone' => '0987654321',
        'email' => '****@gmail.com'
    ]
);

$_2 = new User;

$_2->adduser(
    [
        'name' => 'Amir',
        'last_name' => 'Abron',
        'age' => 20,
        'gender' => 'male',
        'phone' => '0987654321',
        'email' => '****@gmail.com'
    ]
);

$_3 = new User;

$_3->adduser(
    [
        'name' => 'Arthur',
        'last_name' => 'Morgan',
        'age' => 24,
        'gender' => 'male',
        'phone' => '0987654321',
        'email' => '****@gmail.com'
    ]
);

dd($_1, $_2, $_3);
