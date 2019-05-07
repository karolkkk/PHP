<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>nowy</title>
</head>

<body>
<?php
//polaczenie z baza

include("connect.php");
$query="SELECT * FROM news ORDER BY id DESC LIMIT 0,5";
$result=mysqli_query($db_lnk,$query);
while($row=mysqli_fetch_row($result))
{
	$dupa=substr($row[4],0,150);
	echo"<li>";
	echo "<a href=\"news.php?id=$row[0]\" >$row[1]</a>";
	echo"</li>";
	echo"$row[3] </br>";
	echo"$row[2] </br>";
	if($row[4]>$dupa)
	{
		echo"$dupa ...";
	}else
	{
	echo"$dupa";	
	}
}

?>
</body>
</html>