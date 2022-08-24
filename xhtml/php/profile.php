<?php 
include "db_config.php";
$email = $_POST['email'];
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$query = mysqli_query($con,"UPDATE users SET fName = '$fName', lName ='$lName',phone = '$phone',password= '$password' WHERE email = '$email'");
if($query){
    $data = 'success';
}
else{
    $data = 'failed';
}

header('content-Type: application/json');
echo json_encode($data);
?>