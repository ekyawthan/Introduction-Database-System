<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Project3 &ndash;Music System</title>


<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">
 <link rel="stylesheet" href="css/layouts/side-menu.css">  

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

    <div id="main">
    <div class="content">
        <h2 class="content-subhead">Data Query</h2>
        <hr>
        <div class="content"> 

            <form class="pure-form pure-form-stacked" action="" method="POST">
                <fieldset>
                    <legend>Find names and Tel# of all customers who borrowed a particular CD and are supposed to return by a particular date</legend>

                    <label for="titile">CD title</label>
                    <select id="title" name="title">
                    <?php 
                    include_once("conn.php");
                    $sql = "SELECT title FROM Rent ";
                    $result = mysql_query($sql);
                    while($row = mysql_fetch_array($result)){
                        echo "<option value='".$row['title']."'>".$row['title']."</option>";
                   }
                   ?>
                   </select>

                    <label for="returnDate">Rent Date:</label>
                      <select id="returnDate" name="returnDate">
                    <?php 
                    $sql = "SELECT returnDate FROM Rent ";
                    $result = mysql_query($sql);
                    while($row = mysql_fetch_array($result)){
                        echo "<option value='".$row['returnDate']."'>".$row['returnDate']."</option>";
                   }
                   ?>
                   </select>

                    <button type="submit" name="rentQ" class="pure-button pure-button-primary">Find It!</button>
                </fieldset>
            </form>
            <?php         
            include_once("rentq.php");     
            ?>
            <hr>
            <form class="pure-form pure-form-stacked" action="" method="POST">
                <fieldset>
                    <legend>List producers who produce CD of a particular artist released in a particular year</legend>

                    <label for="titile">Artist</label>
                    <select id="title" name="title">
                    <?php 
                    include_once("conn.php");
                    $sql = "SELECT artist FROM Song ";
                    $result = mysql_query($sql);
                    while($row = mysql_fetch_array($result)){
                        echo "<option value='".$row['artist']."'>".$row['artist']."</option>";
                   }
                   ?>
                   </select>

                    <label for="year">CD release Year:</label>
                      <select id="year" name="year">
                    <?php 
                    $sql = "SELECT year FROM CD ";
                    $result = mysql_query($sql);
                    while($row = mysql_fetch_array($result)){
                        echo "<option value='".$row['year']."'>".$row['year']."</option>";
                   }
                   ?>
                   </select>

                    <button type="submit" name="rentQ1" class="pure-button pure-button-primary">Find It!</button>
                </fieldset>
            </form>
            <?php         
            include_once("rentq.php");     
            ?>

    </div>
    </div>
    </div>
    <script src="js/ui.js"></script>
    </body>
    </html>

   