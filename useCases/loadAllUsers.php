<?php

require_once ('../src/user.php');
require_once ('../connection.php');

$users = User::loadAllUsers($conn);
var_dump($users);

$conn->close();
$conn = null;

