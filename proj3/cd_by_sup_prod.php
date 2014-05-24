<?php 
    if(isset($_POST['SubCD'])){ //check if form was submitted
    $title = mysql_real_escape_string($_POST['title']);
    $year = mysql_real_escape_string($_POST['year']);
    $type = mysql_real_escape_string($_POST['type']);
    $supplier = mysql_real_escape_string($_POST['supplier']);
    $producer = mysql_real_escape_string($_POST['producer']);

    $sql = "INSERT INTO CD(title, year, type) VALUES('$title','$year','$type')";
    if(!mysql_query($sql))
        die('Error0: ' .mysql_error());
    echo "record added";
    /*
     $sql1 = "INSERT INTO CD_Produced_By (title, year, name) SELECT C.title, C.year, P.name FROM CD C, Producer P WHERE C.title = $title and C.year = $year, P.name = $supplier";
    if(!mysql_query($sql))
        die('Error1: ' .mysql_error());
    echo $producer;*/
    } 

