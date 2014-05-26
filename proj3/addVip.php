<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Project3 &ndash;Music System</title>


      <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">
    <link rel="stylesheet" href="css/layouts/side-menu.css"> 
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css"
    href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
    <script type="text/javascript">
   

 $(function() {
$( "#datepicker" ).datepicker();
});
</script>
</script>

</head>
<body>

    <div id="layout">
        <!-- Menu toggle -->
        <a href="#menu" id="menuLink" class="menu-link">
            <!-- Hamburger icon -->
            <span></span>
        </a>

        <div id="menu">
            <div class="pure-menu pure-menu-open">
                <a class="pure-menu-heading" href="index.php">Project 3</a>

                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="insertdb.php">Insert Data</a></li>

                    <li class="menu-item-divided pure-menu-selected">
                        <a href="query.php">Query Data</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content"> 

            <form class="pure-form pure-form-stacked" action="" method="POST">
                <fieldset>
                    <legend>New VIP (ONLY FOR EXISTING CUSTOMER)</legend>

                     <label for="ssn">Customer ID</label>
                 <select id="ssn" name="ssn">
                    <?php 
                    include_once("conn.php");
                    $sql = "SELECT ssn FROM Customer ";
                    $result = mysql_query($sql);
                    while($row = mysql_fetch_array($result)){
                        echo "<option value='".$row['ssn']."'>".$row['ssn']."</option>";
                   }
                   ?>
                <label >Starting Date</label>
                    <input id="datepicker" type="date" name="date" placeholder="date">
                    <label for="discount">Discount</label>
                    <input id="discount" type="number" name="discount" placeholder="10">

                    <button type="submit" name="subCust" class="pure-button pure-button-primary">add</button>
                </fieldset>
            </form>
            <?php 
        if(isset($_POST['subCust'])){ //check if form was submitted
            $ssn = mysql_real_escape_string($_POST['ssn']);
            $start = mysql_real_escape_string($_POST['start']);
            $discount = mysql_real_escape_string($_POST['discount']);
            $sql = "INSERT INTO VIP(ssn, start, discount) SELECT ssn, '$start', '$discount' FROM Customer WHERE Customer.ssn = '$ssn' ";

            if(!mysql_query($sql))
                die('Error: ' .mysql_error());
            echo "record added";
        } 
        mysql_close();
        ?>

    </div>
</div>
</body>
</html>
