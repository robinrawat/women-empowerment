<?php

$mysql_host='localhost';
$mysql_user='id5388810_robin';
$mysqlsql_password='abcdefgh';

$db=mysqli_connect($mysql_host,$mysql_user,$mysqlsql_password,"id5388810_wep");
if(!$db)
{
	echo 'Not connected';
}	
if(!mysqli_select_db($db,'id5388810_wep'))
{
	echo 'Database not selected';
}

?>