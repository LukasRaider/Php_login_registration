<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>

<?php
include "connect.php";
if (!($con = mysqli_connect($HOST,$USER,$PASSWORD,$DB)))
{
	die("Nelze se připojit k databázovému serveru!</body></html>");
}
mysqli_query($con,"SET NAMES 'utf8'");
if($_POST["heslo"]==$_POST["heslo_znovu"])
{
if (mysqli_query($con,
"INSERT INTO registrace(jmeno, prijmeni, login, heslo) VALUES('" .
addslashes($_POST["jmeno"]) . "', '" .
addslashes($_POST["prijmeni"]) . "', '" .

addslashes($_POST["login"]) . "', '" .
addslashes($_POST["heslo"]) . "')"))
{
	echo "Úspěšně vloženo.";
}
else
{
	echo "Nelze provést dotaz. " . mysqli_error($con);
}
mysqli_close($con);
}
else{
	echo "Neni shodne heslo.";
} 
?>
<?php
include_once ("Menu.php");
Menu();
?>
</body>
</html>
