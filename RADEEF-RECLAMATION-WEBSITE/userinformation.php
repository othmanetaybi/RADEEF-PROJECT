<?php

$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection,"fizazydata");

$user = $_POST['user'];
$CN = $_POST['CN'];
$tele = $_POST['tele'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata`(`user`,`CN`,`tele`,`email`,`message`) VALUES ('$user','$CN','$tele','$email','$message') ";

mysqli_query($connection,$query);

echo "Bien reçu";

?>