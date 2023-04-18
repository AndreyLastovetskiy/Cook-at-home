<?php
session_start();
if($_COOKIE['idgroup'] != 1) {
    header("Location: ../index.php");
}
require_once("../db/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

    <script src="https://cdn.tiny.cloud/1/fipw5p8ktoulbzn13x05gn3k023y7zotl1ttiifwjubct86w/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <title>Добавить блюдо</title>
    <link rel="stylesheet" href="../assets/css/input.css">
</head>
<body>
    <h2>Добавить блюдо</h2>
    <form action="./vendor/create.php" enctype="multipart/form-data" method="post" class="create-form">
        <input type="hidden" name="id_categ" value="<?= $_GET['id']; ?>">
        <div class="text-field text-field_floating" style="width: 400px;">
            <input class="text-field__input" type="text" name="title" placeholder="123">
            <label class="text-field__label" for="title">Название</label>
        </div>
        <input type="file" name="pathimg">
        <textarea name="editor" id="editor"></textarea>
        <div class="text-field text-field_floating" style="width: 700px;">
            <input class="text-field__input" type="text" name="compound" placeholder="123">
            <label class="text-field__label" for="compound">Состав блюда</label>
        </div>
        <div class="text-field text-field_floating" style="width: 400px;">
            <input class="text-field__input" type="text" name="price" placeholder="123">
            <label class="text-field__label" for="price">Цена</label>
        </div>
        <input type="submit" value="Добавить блюдо" class="add-prod">
    </form>


    
<script>
    tinymce.init({
        selector: 'textarea#editor',  //Change this value according to your HTML
        auto_focus: 'element1',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    }); 
</script>
</body>
</html>