<?php
include_once 'connection/connection.php';

$username = $_POST['name'];
$password = $_POST['password'];

if (isset($_POST['submit'])) {
    $log = sqli_query("select * from `admin` where= '$username' where password='$password'");
}
