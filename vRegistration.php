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

$query = "INSERT INTO `vendors`(`First Name`, `Last Name`, `Date of Birth`, `Phone Number`, `CNIC`, `CNIC IMG`, `Skill`, `Password`) VALUES ('$firstName', '$lastName', '$dob', '$phoneNumber', '$cnic', '$cnicImg', '$skill', '$password')";
$result = mysqli_query($conn, $query);

$message = "";
if($result == '1')
    $message = "Success";
else
    $message = "Failed";

header("Message: $message");

?>