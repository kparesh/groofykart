<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "grof";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
  echo "not conneced";
}


?>