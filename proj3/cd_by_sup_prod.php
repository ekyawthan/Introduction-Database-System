<?php 
    if(isset($_POST['SubCD'])){ //check if form was submitted
    $title = mysql_real_escape_string($_POST['title']);
    $year = mysql_real_escape_string($_POST['year']);
    $type = mysql_real_escape_string($_POST['type']);
    $sql = "INSERT INTO CD(title, year, type) VALUES('$title','$year', '$tyoe')";
    if(!mysql_query($sql))
        die('Error: ' .mysql_error());
    echo "record added";
    } 

 ?>