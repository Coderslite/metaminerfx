<?php
session_start();
include "db_config.php";
include "session.php";

$email =$_POST['email'];
$query = mysqli_query($con, "UPDATE users SET status = 'blocked' WHERE email = '$email'");

if ($query) {
    $_SESSION['SuccessMessage'] = "User Blocked Successfully";
    header('location:../registered_users.php');
} else {
    $_SESSION['SuccessMessage'] = "Failed to block user";
    header('location:../registered_users.php');
}


?>