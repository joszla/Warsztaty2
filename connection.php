<?php

$serverName = 'localhost';
$userName = 'root';
$password = 'coderslab';
$databaseName = 'Twitter';

$conn = new mysqli($serverName, $userName, $password, $databaseName);

if ($conn->connect_error){
  die("Connection error: " . $conn->connect_error);
}

$conn->set_charset('utf8');