<?php 
require_once("../db/db.php");

$name = $_POST['name'];
$phone = $_POST['phone'];
$person_out = $_POST['person-out'];
$reservation_date = $_POST['reservation-date'];
$person = $_POST['person'];
$message = $_POST['message'];

mysqli_query($link, "INSERT INTO `card`(`name`, `phone`, `person`, `date`, `time`, `descrip`) VALUES ('$name','$phone','$person_out','$reservation_date','$person','$message')");
header("Location: ../index.php");
?>