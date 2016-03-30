<?php
$server 	= "localhost";
$db 		= "elearning";
$username 	= "root";
$charset 	= "utf8";
$password 	= "";

$db = new PDO("mysql:host=$server;dbname=$db;charset=$charset", $username, $password);

