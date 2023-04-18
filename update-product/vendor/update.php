<?php
session_start();
if($_COOKIE['idgroup'] != 1) {
    header("Location: ../../index.php");
}
require_once("../../db/db.php");

$id = $_POST['id_product'];
$title = $_POST['title'];
$editor = $_POST['editor'];
$compound = $_POST['compound'];
$price = $_POST['price'];

$path = 'assets/upload/product/' . time() . $_FILES['pathimg']['name'] . ".png";
move_uploaded_file($_FILES['pathimg']['tmp_name'], '../../' . $path);

$sel_prod = mysqli_query($link, "SELECT * FROM `product` WHERE `title` = '$title'");
$sel_prod = mysqli_fetch_assoc($sel_prod);

var_dump($sel_prod);

if(!empty($_FILES['pathimg']['name'])) {
    mysqli_query($link, "UPDATE `product` SET `title`='$title', `path`='$path', `descrip`='$editor', `compound` = '$compound', `price`='$price' WHERE `id` = '$id'");
    header("Location: ../../product.php?id=" . $id);
} else {
    mysqli_query($link, "UPDATE `product` SET `title`='$title', `descrip`='$editor', `compound` = '$compound', `price`='$price' WHERE `id` = '$id'");
    header("Location: ../../product.php?id=" . $id);
}


?>