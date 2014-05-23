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
                    <a href="#">Query Data</a>
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
        if(isset($_POST['SubProd'])){ //check if form was submitted
            $db_host = 'localhost';
            $db_user = 'root';
            $db_passwd = 'Qsan8of12';
            $db_name = 'dev';
            if(!@mysql_connect($db_host, $db_user, $db_passwd)) {
            echo "<h2>Connection Error.</h2>";
            die();
            }
            mysql_select_db($db_name);
            $name = $_POST['name'];
            $address = $_POST['address'];
            if(! mysql_query("INSERT INTO Producer (name, address) VALUES('$name, $address)")){
            }
            mysql_close();
        }    
    ?>  
    <hr>
    <form class="pure-form pure-form-stacked">
    <fieldset>
        <legend>Insert a CD supplied by a particular supplier and produced by a particular producer </legend>

        <label for="CD">CD Title</label>
        <input id="CD" type="text" placeholder="CD Title">

        <label for="year">Year</label>
        <input id="year" type="number" placeholder="The Year">

        <label for="supplier">Supplier</label>
        <select id="suplier">
            <option>AL</option>
            <option>CA</option>
            <option>IL</option>
        </select>

        <label for="supplier">Producer</label>
        <select id="suplier">
            <option>AL</option>
            <option>CA</option>
            <option>IL</option>
        </select>

        <button type="submit" class="pure-button pure-button-primary">Add</button>
        </fieldset>
        </form>
        <hr>
        <form class="pure-form pure-form-stacked">
    <fieldset>
        <legend>Insert a regular-customer borrowing a particular CD</legend>

        <label for="name">Customer Name</label>
        <input id="name" type="text" placeholder="Name">

        <label for="date">Rent'Date:</label>
        <input id="date" type="date" placeholder="Date">
        <label for="date">Due Date:</label>
        <input id="date" type="date" placeholder="Date">

        <button type="submit" class="pure-button pure-button-primary">Rent</button>
    </fieldset>
</form>
<hr>
        <form class="pure-form pure-form-stacked">
    <fieldset>
        <legend>Insert a VIP-customer borrowing a particular CD</legend>

        <label for="name">Customer Name</label>
        <input id="name" type="text" placeholder="Name">

        <label for="date">Rent'Date:</label>
        <input id="date"  type="date" value="2010-12-16;" placeholder="Date">
        <label for="date">Due Date:</label>
        <input id="date" type="date" placeholder="Date">

        <button type="submit" class="pure-button pure-button-primary">Rent</button>
    </fieldset>
</form>        
    </div>

    </div>
    </body>
    </html>