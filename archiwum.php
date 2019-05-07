<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Archiwum</title>
</head>

<body>
<a href="news.php">Przejdź do nowe</a></br>
<a href="dodaj.php">Dodaj nowy wpis</a>

<?php
include("connect.php");
$query = "SELECT * FROM news ORDER BY id  DESC";

$result = $dbo->query($query);

while($row = $result->fetch(PDO::FETCH_OBJ))
{
	$part = substr($row->tresc,0,150);
	echo "<table border=5px width=400px><tr><th>";
	echo "<a href=\"news.php?id=$row->id\">$row->nazwa</a></th>";
	echo "<th rowspan=\"2\">$row->data</th></tr>";
	echo "<tr><th>$row->autor</tr></th>";
	
	echo "<tr><th colspan=\"2\">$part";
		if($row->tresc > substr($row->tresc,0,150))
		{
			echo " <a href=\"news.php?id=$row->id\">Czytaj dalej</a>";
		}
	echo "</tr></th></table>";
	
}
?>

</body>
</html>