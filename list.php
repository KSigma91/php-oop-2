<?php

include __DIR__ . '/classes/Food.php';
include __DIR__ . '/classes/Toys.php';
include __DIR__ . '/classes/Users.php';

// lista del cibo
$food1 = new Food('ZiwiPeak', 3,65, 850);
var_dump($food1);
$food2 = new Food('Amanova', 61,95, 10);
var_dump($food2);
$food3 = new Food('Monge', 16,69, 12);
var_dump($food3);

// lista dei giochi
$toys1 = new Toys('Superpatapet', 22,61, 80);
var_dump($toys1);
$toys2 = new Toys('Pet peluche', 10,32, 30);
var_dump($toys2);
$toys3 = new Toys('Soft squeaky', 12,13, 369);
var_dump($toys3);

// lista utenti
$user1 = new Users('PaoloRossi22', 1234);
var_dump($user1);
$user2 = new Users('PincoPanco21', 010110);
var_dump($user2);

?>