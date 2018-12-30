<?php
include('conn.php');


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['mobile'];
$area = $_POST['area'];
$email = $_POST['email'];
$success1="success";
$fail1="fail";
/*$fname ="hkjhk";
$lname = "nkjhk";
$mobile = "7878";
$area = "jhghjg";
$email = "jhgg";*/


$sql =" insert into user(fname,lname,mobile,address,email) values('$fname','$lname','$mobile','$area','$email')";

if (mysqli_query($conn, $sql)) {
    echo $success1;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
