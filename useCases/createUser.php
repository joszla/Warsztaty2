<?php

require_once ('../src/user.php');
require_once ('../connection.php');

$user1 = new User();
$user1->setName('Asia');
$user1->setEmail('j.sz.gmail.com');
$user1->setPassword('passs1');
var_dump($user1);
var_dump($user1->saveToDB($conn));
$conn->close();
$conn = null;