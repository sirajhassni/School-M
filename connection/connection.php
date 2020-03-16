<?php

$server = "localhost";
$username = "root";
$password ="";
$dbname ="school-m";


$conn = mysqli_connect($server,$username,$password,$dbname);

if(!$conn){
    echo "No Conn";
}
else{
    echo"conn good";
}




// try {
//     $con = new PDO("mysql:host=$server,dbname=$dbname", $username, $password);
// } catch (PDOException $ex) {
//     echo $ex->getMessage();
// }
