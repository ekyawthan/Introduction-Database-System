<?php
include('conn.php');
if($_POST)
{
	$q=$_POST['search'];
	$sql_res=mysql_query("select name from Producer where name like '%$q%' LIMIT 5");
	while($row=mysql_fetch_array($sql_res))
	{
	$username=$row['name'];
	echo $username;
	}
}
?>
