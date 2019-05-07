<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dodaj</title>
</head>

<body>
<form action="" method="POST" required></br>
tytul: <input name="tytul" required></br>

tresc: <textarea name="tresc" ></textarea>
</br>
<input type="submit" value="wyslij">
</form>

<?php
//polaczenie
include("connect.php");

//pobranie danych
$tytul=$_POST['tytul'];

$tresc=$_POST['tresc'];
$data=date("d-m-Y G:i:s");
//wpisanie do tabeli
$query="insert into projekt (tytul,data,tresc) values  ('$tytul',now(),'$tresc')";

mysqli_query($db_lnk,$query);

?>
</body>
</html>