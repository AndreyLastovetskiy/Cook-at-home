<?php
session_start();
require_once("../db/db.php");

$id_group = 2;
$login = $_POST['login'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$fio = $_POST['fio'];

$pass_hash = password_hash($password, PASSWORD_DEFAULT);

$sel_user = mysqli_query($link, "SELECT * FROM `user` WHERE `login` = '$login'");
$sel_user = mysqli_fetch_assoc($sel_user);

if(empty($sel_user)) {
    if($password != $cpassword) {
        $_SESSION["errMesUp"] = 'Пароли не совпадают';
        header("Location: ../registration.php");
    } else {
        mysqli_query($link, "INSERT INTO `user`(`idgroup`, `login`, `password`, `email`, `phone`, `fio`) VALUES ('$id_group','$login','$pass_hash','$email','$phone','$fio')");
        header("Location: ../login.php");
    }
} else {
    $_SESSION["errMesUp"] = 'Такой пользователь уже существует';
    header("Location: ../registration.php");
}

?>