<?php
if (isset($_POST['admin-submit'])) {

    require_once 'connection.php';

    $adminName = $_POST['email'];
    $adminpwd = $_POST['password'];

    $sql  = ("select * from `admin` where email=? or password=?");
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header('location:../adminlogin.php?error=sqlerror');
        exit();
    }else {
        mysqli_stmt_bind_param($stmt,"ss",$adminName,$adminpwd);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)) {
            header('location:../dashboard.php?login=success');
            // session_start();
            // $_SESSION['email'] = $row['email'];
            exit(); 
            
        }else {
            header('location:../adminlogin.php?error=nouser');
            exit(); 
        }
    }
    
   
}else {
    header('location:../adminlogin.php');
    exit();
}