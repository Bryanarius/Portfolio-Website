<?php
session_start();

$usersEmail = $_POST['usersEmail'];

$to = "$usersEmail";
$subject = "Your Order";
$txt = "Thanks for ordering from Bistros Jax Fl  ";
$headers = "From: orders@bistros.com";

mail($to,$subject,$txt,$headers);

$_SESSION['message'] = 'messageok';
  
  header("location: thankyou.php");


?>