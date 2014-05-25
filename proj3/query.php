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

        <ul>
            <li></li>
        </ul>

    </div>
    </div>
    </div>
    <script src="js/ui.js"></script>
    </body>
    </html>