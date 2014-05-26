<?php 
    if(isset($_POST['subCust'])){ //check if form was submitted
    $ssn = mysql_real_escape_string($_POST['ssn']);
    $name = mysql_real_escape_string($_POST['name']);
    $phoneNo = mysql_real_escape_string($_POST['phoneNo']);
    $sql = "INSERT INTO Customer(ssn, name, phoneNo) VALUES('$ssn','$name', '$phoneNo')";

    if(!mysql_query($sql))
        die('Error: ' .mysql_error());
    echo "record added";
    } 

 ?>