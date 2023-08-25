<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Registrace</title>
</head>
<body>
<h1>Registrace</h1>


<form method="POST" action="Registracepost.php">
	Jméno:
	<input name="jmeno" type="text" ><br>
	Příjmení:
	<input name="prijmeni" type="text" ><br>
	Login:
	<input name="login" type="text" ><br>
	Heslo:
	<input name="heslo" type="text" ><br>
    Heslo znovu:
	<input name="heslo_znovu" type="text" ><br>
    <br>
	<input type="submit" value="Registrovat" >

<?php
include_once "Menu.php";
Menu();
?>

</body>
</html>