<?php

include "server.php";

$phoneNumber = $_POST['phoneNumber'];
$password = $_POST['password'];

$exists = 0;

$query = "SELECT * FROM `vendors` WHERE `Phone Number`='$phoneNumber' AND `Password`='$password'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);

if($count >= 1) {
    $exits = 1;
}

$message = "";
if($exists == 1) {
    $message = "Success";
}
else {
    $message = "Fail";
}
header("Message: $message");



?>