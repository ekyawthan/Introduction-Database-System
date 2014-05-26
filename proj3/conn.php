<?php 
	     $db_host = '134.74.112.65';
        $db_user = 'mon14';
        $db_passwd = 'kyaw';
        $db_name = 'd418';
        if(!@mysql_connect($db_host, $db_user, $db_passwd)) {
                echo "<h2>Connection Error.</h2>";
        die();
    }
    mysql_select_db($db_name);
 ?>