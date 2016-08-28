<?php

require_once ('../src/user.php');
require_once ('../connection.php');

$user = User::loadUserById($conn, 1);
var_dump($user);

$user2 = User::loadUserById($conn, 4455);
var_dump($user2);

$conn->close();
$conn = null;
