<?php

require_once 'config.php';
require_once 'form.phtml';

$name = mysqli_real_escape_string($connection, $_REQUEST['name']);
$surname = mysqli_real_escape_string($connection, $_REQUEST['surname']);
$date_of_birth = mysqli_real_escape_string($connection, $_REQUEST['date_of_birth']);

$add = "INSERT INTO person (name, surname, date_of_birth) VALUES ('$name', '$surname', '$date_of_birth')";

if(mysqli_query($connection, $add)){
    echo "3rd task completed";
} else {
    echo "ERROR: Could not able to execute";
}