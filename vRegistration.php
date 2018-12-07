<?php

include "server.php";

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$dob = $_POST['dob'];
$phoneNumber = $_POST['phoneNumber'];
$cnic = $_POST['cnic'];
$cnicImg = $_POST['cnic_img'];
$skill = $_POST['skill'];
$password = $_POST['password'];
$source = $_POST['source'];

if($source == "unity.vendorapp")
{
    $verified = 0;
    $query = "INSERT INTO `Vendors`(`First Name`, `Last Name`, `Date of Birth`, `Phone Number`, `CNIC`, `CNIC IMG`, `Skill`, `Password`, `Verified`) VALUES ('$firstName', '$lastName', '$dob', '$phoneNumber', '$cnic', '$cnicImg', '$skill', '$password', '$verified')";
    $result = mysqli_query($conn, $query);
}

$message = "";
if($result == '1')
    $message = "Success";
else
    $message = "Failed";

header("Message: $message");

?>
