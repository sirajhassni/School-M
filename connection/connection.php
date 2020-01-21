<?php

$server = "localhost";
$username = "root";
$password ="";
$dbname ="school-m";

try {
    $con = new PDO("mysql:host=$server,dbname=$dbname", $username, $password);
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
