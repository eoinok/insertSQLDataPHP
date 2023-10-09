<?php
//Give the name of the program here
//Include your name and the date here
//Give a brief description of what the program does
$servername = "localhost";
$username = "user";
$password = "pass";
$dbname = "database";
$port = 3307;

//set the default timezone - this is necessary for PHP8
date_default_timezone_set('Europe/Dublin');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO member (firstname, surname) VALUES ('john', 'doe')";

mysqli_query($conn, $sql);

mysqli_close($conn);
?>
