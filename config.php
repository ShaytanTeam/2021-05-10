<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = "CodeAcademyDB";

$connection = new mysqli($hostname, $username, $password, $dbname);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
echo "1st task: connected successfully";