

<?php 
    if(isset($_POST['rentQ'])){ //check if form was submitted
    $title = mysql_real_escape_string($_POST['title']);
    $returnDate = mysql_real_escape_string($_POST['returnDate']);
    $sql = "SELECT C.name, C.phoneNo FROM Customer C, Rent R WHERE C.ssn =R.ssn and R.title = '$title' and R.returnDate = '$returnDate'";

    $result = mysql_query($sql);

    echo "<table class = 'pure-table'> <thead><tr><th>Customer Name</th><th>Phone No</th></tr></thead><tbody>";
    while ($row = mysql_fetch_array($result, MYSQL_NUM) )
    {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
    echo "</tbody></table>";
    } 

     if(isset($_POST['rentQ1'])){ //check if form was submitted
    $artist = mysql_real_escape_string($_POST['artist']);
    $year = mysql_real_escape_string($_POST['year']);
    $sql = "SELECT C.name, C.phoneNo FROM Customer C, Rent R WHERE C.ssn =R.ssn and R.title = '$title' and R.returnDate = '$returnDate'";

    $result = mysql_query($sql);

    echo "<table class = 'pure-table'> <thead><tr><th>Producer Name</th></tr></thead><tbody>";
    while ($row = mysql_fetch_array($result, MYSQL_NUM) )
    {
        echo "<tr><td>".$row[0]."</td></tr>";
    }
    echo "</tbody></table>";
    } 


?>

