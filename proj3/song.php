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
                    <legend>Add A Song</legend>

                    <label for="name">name</label>
                    <input id="name" type="text" name="name" placeholder="i.e La la la..">

                    <label for="artist">Artist</label>
                    <input id="artist" type="text" name="artist" placeholder="i.e Bon Jovi">
                    <label for="trackNo">track#</label>
                    <input id="trackNo" type="number" name="trackNo" placeholder="i.e 646969556">
                    <select id="suplier" name="supplier">
                    <?php 
                    include_once("conn.php");
                    $sql = "SELECT title FROM CD ";
                    $result = mysql_query($sql);
                    while($row = mysql_fetch_array($result)){
                        echo "<option value='".$row['title']."'>".$row['title']."</option>";
                   }
                   ?>
                    </select>
                    <button type="submit" name="subSong" class="pure-button pure-button-primary">add</button>
                </fieldset>
            </form>
            <?php 
            include_once("conn.php");
        if(isset($_POST['subSong'])){ //check if form was submitted
            $name = mysql_real_escape_string($_POST['name']);
            $artist = mysql_real_escape_string($_POST['artist']);
            $titte = mysql_real_escape_string($_POST['title']);
            $sql = "INSERT INTO Song(name, artist, title, year) SELECT '$name', '$artist', CD.title, CD.year From CD Where CD.title = '$titte'";

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