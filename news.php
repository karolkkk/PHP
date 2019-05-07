<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nowe</title>
</head>
<body>

<?php

include("connect.php");
$query = "SELECT * FROM projekt WHERE id=".(int)$_GET['id']."";
$result = $dbo->query($query);
$row = $result->fetch(PDO::FETCH_OBJ);

echo "<table border=5px width=400px><tr><th>";
	echo "$row->nazwa</th>";
	echo "<th rowspan=\"2\">$row->data</th></tr>";
	echo "<tr><th>$row->autor</tr></th>";
	
	echo "<tr><th colspan=\"2\">$row->tresc";
	
	echo "</th></tr></table>";


?>
<a href="new.php">Wróć do nowe</a></br>
<a href="archive.php">Wróć do archiwum</a></br>
<a href="add.php">Dodaj nowy wpis</a></br>

</body>
</html>