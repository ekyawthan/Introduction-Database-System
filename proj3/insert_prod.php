<?php 
    if(isset($_POST['SubProd'])){ //check if form was submitted
    $name = mysql_real_escape_string($_POST['name']);
    $address = mysql_real_escape_string($_POST['address']);
    $sql = "INSERT INTO Producer(name, address) VALUES('$name','$address')";

    if(!mysql_query($sql))
        die('Error: ' .mysql_error());
    echo "record added";
    } 

 ?>