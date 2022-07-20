<?php

session_start();
require_once 'connection.php';

//update record

if(isset($_POST['submit'])){
    
    $name= mysqli_real_escape_string($conn,$_POST['name']);
    $address= mysqli_real_escape_string($conn,$_POST['address']);
    $pincode=mysqli_real_escape_string($conn,$_POST['pincode']);
    $contact= mysqli_real_escape_string($conn,$_POST['contact']);
    $email= mysqli_real_escape_string($conn,$_POST['email']);
    $gender= mysqli_real_escape_string($conn,$_POST['gender']);
    $rid= mysqli_real_escape_string($conn,$_POST['rid']);
    
    mysqli_query($conn, "UPDATE tbl_customer_info SET name='$name',address='$address',pincode='$pincode',contact='$contact',email='$email',gender='$gender' WHERE rid=$rid");
    $_SESSION['msg']="update Recored";
    header('Location:update_user_detail.php');
}

?>
