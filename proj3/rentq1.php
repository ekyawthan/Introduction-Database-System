<?php 

       if(isset($_POST['rentQ1'])){ //check if form was submitted
    $artist = mysql_real_escape_string($_POST['artist']);
    $year = mysql_real_escape_string($_POST['year']);
    //List producers who produce CD of a particular artist released in a particular year
    $sql = "SELECT P.name From Producer P, (SELECT C.title FROM CD c, Song s WHERE s.artist = '$artist' and s.tittle = c.tittle and CD.year = '$year') as t WHERE P.title = t ";

    $result = mysql_query($sql);

    echo "<table class = 'pure-table'> <thead><tr><th>Producer Name</th></tr></thead><tbody>";
    while ($row = mysql_fetch_array($result, MYSQL_NUM) )
    {
        echo "<tr><td>".$row[0]."</td></tr>";
    }
    echo "</tbody></table>";
    } 


 ?>