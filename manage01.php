<html>

<head>
    <title>Movie Shop Data Management</title>
</head>

<body>
    <center>
        <h2>Management of Movie Shop</h2>
        <hr>
        The following sheet is used for Film data management. To add data press the button <font Color="#FF0000">ADD</font>
        while to change or delete a data, select first the desired data then press the button <font color="#FF0000">EDIT</font> atau <font color="#FF0000">DELETE</font>.</font>
        <form action="manage02.php" method="POST">
            <select name="id" size="6">
                <?php
                    include("database.php");
                    $result_mysql = mysqli_query($connection, "SELECT * FROM dvd");
                    while ($row = mysqli_fetch_row($result_mysql)) {
                        $movie_id = $row[0];
                        $title = $row[1];
                        $type = $row[2];
                        $name_gmb = $row[3];
                        $director = $row[4];
                        $main_lead = $row[5];
                        $price = $row[6];
                        $publication_year = $row[7];
                    ?>
                        <option value="<?=$movie_id?>"><?= $title ?></option>
                <?php    
                    }
                ?>
            </select><br><br>
            <input name="action" type="submit" value="ADD">
            <input name="action" type="submit" value="EDIT">
            <input name="action" type="submit" value="REMOVE">
        </form>
        <hr>
        Address : Baker Street<br> e-mail : <a href=mailto:dvdstore@everything.com>dvdstore@everything.com</a>
    </center>
</body>

</html>