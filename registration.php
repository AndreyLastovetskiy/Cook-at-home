<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Регестрация</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel='stylesheet prefetch' href='css/bootstrap.min.css'>

      <link rel="stylesheet" href="./assets/css/reg.css">

  
</head>

<body>
  <div class="container">
	<header>
		<h1>
			<a href="./">
				<img src="./assets/images/logo.svg">
			</a>
		</h1>
	</header>
	<h1 class="text-center">Регестрация</h1>
	<form class="registration-form" action="./reg/reg.php" method="post">
		<label>
			<span class="label-text">Логин</span>
			<input type="text" name="login" required>
		</label>
        <label class="password">
			<span class="label-text">Пароль</span>
			<input type="password" name="password" required>
		</label>
        <label class="password">
			<span class="label-text">Подтвержение Пароля</span>
			<input type="password" name="cpassword" required>
		</label>
        <label>
			<span class="label-text">Email</span>
			<input type="email" name="email" required>
		</label>
        <label>
			<span class="label-text">Телефон</span>
			<input type="text" name="phone" required>
		</label>
        <label>
			<span class="label-text">ФИО</span>
			<input type="text" name="fio" required>
		</label>
		<div class="text-center">
			<button class="submit">Зарегестрироваться</button>
		</div>
	</form>
    <?php
	if (($_SESSION["errMesUp"] ?? '') === ''); else {
		print_r($_SESSION["errMesUp"]);
		session_destroy();
	}
    ?>
</div>
 

    <script src="js/index.js"></script>

</body>
</html>
