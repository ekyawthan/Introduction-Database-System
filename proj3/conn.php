<?php 
	$db_host = 'localhost';
    $db_user = 'root';
    $db_passwd = 'Qsan8of12';
    $db_name = 'dev';
    if(!@mysql_connect($db_host, $db_user, $db_passwd)) {
        echo "<h2>Connection Error.</h2>";
        die();
    }
    mysql_select_db($db_name);
 ?>