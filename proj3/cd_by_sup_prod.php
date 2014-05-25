<?php 
    if(isset($_POST['SubCD'])){ //check if form was submitted
    $title = mysql_real_escape_string($_POST['title']);
    $year = mysql_real_escape_string($_POST['year']);
    $type = mysql_real_escape_string($_POST['type']);
   
    $producer = mysql_real_escape_string($_POST['producer']);

    $sql = "INSERT INTO CD(title, year, type) VALUES('$title','$year','$type')";
    if(mysql_query($sql)) {
        $supplier = mysql_real_escape_string($_POST['supplier']);
        $sql1 = "INSERT INTO CD_Produced_By (title, year, name) SELECT CD.title, CD.year, Producer.name FROM CD, Producer WHERE Producer.name = '$producer' AND CD.title = '$title' ";
        if(mysql_query($sql1))
        {
            echo "successully added";
        }
    }
}

