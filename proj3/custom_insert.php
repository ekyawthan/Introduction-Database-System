<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Project3 &ndash;Music System</title>


    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">
    <link rel="stylesheet" href="css/layouts/side-menu.css"> 
    
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
                    <legend>Add A  New Customer</legend>

                    <label for="ssn">ssn</label>
                    <input id="ssn" type="text" name="ssn" placeholder="ixxx-xx-2343">

                    <label for="name">Name</label>
                    <input id="name" type="text" name="name" placeholder="i.e John">
                    <label for="phone">Phone</label>
                    <input id="phone" type="number" name="phoneNo" placeholder="i.e 646969556">

                    <button type="submit" name="subCust" class="pure-button pure-button-primary">add</button>
                </fieldset>
            </form>
            <?php 
            include_once("conn.php");
        if(isset($_POST['subCust'])){ //check if form was submitted
            $ssn = mysql_real_escape_string($_POST['ssn']);
            $name = mysql_real_escape_string($_POST['name']);
            $phoneNo = mysql_real_escape_string($_POST['phoneNo']);
            $sql = "INSERT INTO Customer(ssn, name, phoneNo) VALUES('$ssn','$name', '$phoneNo')";

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
