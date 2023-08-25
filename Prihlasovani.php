<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Prihlaseni</title>
</head>
<body>
<h1>Prihlaseni</h1>
<form method="POST" action="Prihlasovanipost.php">
	Login:
	<input name="login" type="text" ><br>
	Heslo:
	<input name="heslo" type="text" ><br>
	<br>
	<input type="submit" value="Prihlaseni" >


<?php
include_once "Menu.php";
Menu();
?>

</body>
</html>