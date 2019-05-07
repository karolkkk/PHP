<?php
if(!$db_lnk=mysqli_connect("localhost","s15195","Kar.Krau"))
{
exit('error nie mozesz polaczyc<br/>');
}else
{
echo' polaczono <br/>';
}
if(!mysqli_select_db($db_lnk,'s15195'))
{
echo'nie mozna wtybrac nazwy bazy danych';
}else
{
echo'zostala wybrana nazwa bazy danych: s15195<br />';
}
?>