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

    <div id="main">
        <div class="header">
            <h1>Project 3: Music System Managements</h1>
            <h2>by: Kyaw Than Mong</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">Project Description</h2>
            <p>
            <ol>
            	<li> CD has a title, a year of production and a CD type. You can come with you own CD types.</li>
            	<li>A CD usually has multiple songs on different tracks. Each song has a name, an artist and a track number. Entity set Song is considered to be weak and needs support from entity set CD. </li>
           		<li>A CD is produced by a producer which has a name and an address.</li>
				<li>A CD may be supplied by multiple suppliers, each has a name and an address. </li>
				<li>A customer may rent multiple CDs. Customer information such as Social Security Number (SSN), name, telephone needs to be recorded.  The date and period of renting (in days) should also be recorded.</li>
				<li>A customer may be a regular member and a VIP member. A VIP member has additional information such as the starting date of VIP status and percentage of discount. </li>
            </ol>
            </p>
        </div>
        <div class="content">
            <h2 class="content-subhead">Task3: Menu driven UI</h2>
            <p>
                <ol>
                    <li>Insert a producer (6%)</li>
                    <li>Insert a CD supplied by a particular supplier and produced by a particular producer (10%)</li>
                    <li>Insert a regular-customer borrowing a particular CD (10%)</li>
                    <li>Insert a VIP customer borrowing a particular CD (10%)</li>
                    <li>Find names and Tel# of all customers who borrowed a particular CD and are supposed to return by a particular date. (12%)</li>
                    <li>List producers who produce CD of a particular artist released in a particular year. (12%)</li>
                </ol>
            </p>
        </div>

    </div>
</div>
<script src="js/ui.js"></script>

</body>
</html>
