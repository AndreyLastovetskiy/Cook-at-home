<?php 
session_start();
if($_COOKIE['idgroup'] != 1) {
    header("Location: ../index.php");
}
require_once("../db/db.php");

$id = $_GET['id'];

mysqli_query($link, "DELETE FROM `product` WHERE `id` = '$id'");

header("Location: ../index.php");
?>