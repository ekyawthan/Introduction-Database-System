

<?php 
    if(isset($_POST['subRent'])){ //check if form was submitted
    $ssn = mysql_real_escape_string($_POST['ssn']);
    $title = mysql_real_escape_string($_POST['title']);
    $rentDate = mysql_real_escape_string($_POST['rentDate']);
    $rentDate = date('Y-m-d', strtotime(str_replace('-', '/', $rentDate)));
    $returnDate = mysql_real_escape_string($_POST['returnDate']);
    $returnDate = date('Y-m-d', strtotime(str_replace('-', '/', $returnDate)));
    $sql = "INSERT INTO Rent(title, year, ssn, rentDate, returnDate)
    SELECT CD.title, CD.year, Customer.ssn, '$rentDate', '$returnDate' FROM CD, Customer WHERE CD.title = '$title' AND Customer.ssn = '$ssn' ";

    if(!mysql_query($sql))
        die('Error: ' .mysql_error());
    echo "record added";
    } 
?>