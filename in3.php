<!DOCTYPE html>
<html lang="en">
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  myFunction();
}
function myFunction() {

  $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);

  $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

  $login = md5($login."kltjcnymsugbsk980423");
  $pass = md5($pass."opvnbkilsvgtka123476");

  $mysql = new mysqli('localhost', 'root', '', 'cad');

  $query = $mysql->query("SELECT `login` FROM `golos` WHERE `id`=7");
  $log = mysqli_fetch_assoc($query);
  // var_dump($log);

  $query = $mysql->query("SELECT `password` FROM `golos` WHERE `id`=7");
  $pas1 = mysqli_fetch_assoc($query);
  // var_dump($pas1);
  $pas1["password"];

  if($login == $log["login"] && $pass == $pas1["password"]) {
  	$vhod = 1;
  	$name = "vhod";
  	setcookie($name, $vhod);
  	header('Location: rezultat.php');
  } else {
  	echo "<p class='er_lp'>Неверный логин или пароль!</p>";
  }

  $mysql->close();
}
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/cod3.css">
	<noscript>ERROR js  !ВКЛЮЧИТЕ JavaSkript!  ERROR js</noscript></head>
<body>
	<section id="section" class="section">
		<div class="container">
    		<div class="pozihon" id="pozihon">
    			<h1>вход</h1>
    			<form method="post">
    				<!-- <label for="login"><b>login</b></label><br> -->
    				<input type="text" placeholder="Введите login" name="login" required><br>
		
    				<!-- <label for="pass"><b>пароль</b></label><br> -->
    				<input type="password" placeholder="Введите пароль" name="pass" required><br>
    				<button type="submit" class="registerbtn">Войти</button>
    			</form>
    		</div>
		</div>
	</section>
</body>
</html>