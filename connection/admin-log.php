<?php
if (isset($_POST['admin-submit'])) {

    require_once 'connetion.php';

    $adminName = $_POST['email'];
    $adminpwd = $_POST['psssword'];

    $sql  = 
   
}else {
    header('location:../adminlogin.php');
    exit();
}