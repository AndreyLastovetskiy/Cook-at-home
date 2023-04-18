<?php
session_start();
if($_COOKIE['idgroup'] != 1) {
    header("Location: ../../index.php");
}
require_once("../../db/db.php");

$id_categ = $_POST['id_categ'];
$title = $_POST['title'];
$editor = $_POST['editor'];
$compound = $_POST['compound'];
$price = $_POST['price'];

$path = 'assets/upload/product/' . time() . $_FILES['pathimg']['name'];
move_uploaded_file($_FILES['pathimg']['tmp_name'], '../../' . $path);

$select_product = mysqli_query($link, "SELECT * FROM `product` WHERE `title` = '$title'");
$select_product = mysqli_fetch_assoc($select_product);

var_dump($select_product);

if(empty($select_product)) {
    mysqli_query($link, "INSERT INTO `product`(`idcategory`, `title`, `path`, `descrip`, `compound`, `price`) VALUES ('$id_categ','$title','$path','$editor','$compound','$price')");
    header("Location: ../../category.php?id=" . $id_categ);
} else {
    $_SESSION["errMes"] = 'Такой продукт уже существует!';
    header("Location: ../create-product.php?id=" . $id_categ);
}


?>