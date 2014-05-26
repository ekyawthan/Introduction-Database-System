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
$( "#datepicker1" ).datepicker();
$( "#datepicker2" ).datepicker();
$( "#datepicker3" ).datepicker();
});
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
                    <legend>Add A Producer</legend>

                    <label for="prod">Name</label>
                    <input id="prod" type="text" name="name" placeholder="i.e John..">

                    <label for="addr">Address:</label>
                    <input id="addr" type="text" name="address" placeholder="i.e 123 xxx">

                    <button type="submit" name="SubProd" class="pure-button pure-button-primary">add</button>
                </fieldset>
            </form>
            <?php
            include_once("conn.php");
            include_once("insert_prod.php");     
            ?>  
            <hr>
            <form class="pure-form pure-form-stacked" action="" method="POST">
                <fieldset>
                    <legend>Insert a CD supplied by a particular supplier and produced by a particular producer </legend>

                    <label for="CD">CD Title</label>
                    <input id="CD" name="title" type="text" placeholder="CD Title">

                    <label for="year">Year</label>
                    <input id="year" name="year" type="number" placeholder="The Year">
                    <label for="type">Type</label>
                    <select id = "type" name="type" type="text">
                     <option  value="solo" selected="selected" >Solo</option>
                     <option value="mixed">Mixed</option>
                 </select>
                 <label for="supplier">Supplier</label>
                 <select id="suplier" name="supplier">
                    <?php 
                    $sql = "SELECT name FROM Supplier ";
                    $result = mysql_query($sql);
                    while($row = mysql_fetch_array($result)){
                        echo "<option value='".$row['name']."'>".$row['name']."</option>";
                   }
                   ?>

               </select>

               <label for="producer">Producer</label>
               <select id="producer" name="producer">
                <?php 
                
                $sql = "SELECT name FROM Producer ";
                $result = mysql_query($sql);
                while($row = mysql_fetch_array($result)){
                   echo "<option value='".$row['name']."'>".$row['name']."</option>";
               }
               ?>
           </select>

           <button type="submit" name="SubCD" class="pure-button pure-button-primary">Add</button>
       </fieldset>
   </form>
   <?php 
        include_once("cd_by_sup_prod.php");
    ?>
   <hr>
   <form class="pure-form pure-form-stacked" action="" method="POST">
    <fieldset>
        <legend>Insert a regular-customer borrowing a particular CD</legend>
        <p>Not Register Yet! <a href="custom_insert.php" title="">register Here</a></p>
        <label for="ssn">Customer ID</label>
                 <select id="ssn" name="ssn">
                    <?php 
                    $sql = "SELECT ssn FROM Customer ";
                    $result = mysql_query($sql);
                    while($row = mysql_fetch_array($result)){
                        echo "<option value='".$row['ssn']."'>".$row['ssn']."</option>";
                   }
                   ?>
               </select>
              <label for="title">CD Title:</label>
         <select id="title" name="title">
                    <?php 
                    $sql = "SELECT title FROM CD";
                    $result = mysql_query($sql);
                    while($row = mysql_fetch_array($result)){
                        echo "<option value='".$row['title']."'>".$row['title']."</option>";
                   }
                   ?>
                   </select>
        <label for="date">Rental Date </label>
        <input id="datepicker" type="date" placeholder="select a Date" name="rentDate">
        <label for="date">Rent Date </label>
        <input id="datepicker1" type="date" placeholder="Date" name="returnDate">

        <button type="submit" name="subRent" class="pure-button pure-button-primary">Rent</button>
    </fieldset>
</form>
<?php 
    include_once("rent.php");
 ?>
<hr>
<form class="pure-form pure-form-stacked">
    <fieldset>
        <legend>Insert a VIP-customer borrowing a particular CD</legend>
        <p>Not A VIP! <a href="addVip.php" title="">Add As VIP Here</a></p>
        <label for="name">VIP ID</label>
         <select id="name" name="name">
                    <?php 
                    $sql = "SELECT ssn FROM VIP";
                    $result = mysql_query($sql);
                    while($row = mysql_fetch_array($result)){
                        echo "<option value='".$row['ssn']."'>".$row['ssn']."</option>";
                   }
                   ?>
                   </select>
                         <label for="title">CD Title:</label>
         <select id="title" name="title">
                    <?php 
                    $sql = "SELECT title FROM CD";
                    $result = mysql_query($sql);
                    while($row = mysql_fetch_array($result)){
                        echo "<option value='".$row['title']."'>".$row['title']."</option>";
                   }
                   ?>
                   </select>
        <label for="date">Rental Date:</label>
        <input id="datepicker2"  type="date" placeholder="Date" name="rentDate">
        <label for="date">Return Date:</label>
        <input id="datepicker3" type="date" placeholder="Date" name="returnDate">

        <button type="submit" name="subRent" class="pure-button pure-button-primary">Rent</button>
    </fieldset>
</form> 
<?php 
    mysql_close();
 ?>  

</div>

</div>
</body>
</html>


