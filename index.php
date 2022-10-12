<html>
<head>
    <title>Movie Shop</title>
</head>
<body>
    <center>
        <h2>Welcome to Movie Shop</h2>
        <hr>
    </center>
    <p>
    <h3> Select the film category you are looking for </h3>
    </p>
    <ul>
        <?php
        include ("database.php");
        //retrieve data
        $query = "SELECT DISTINCT type FROM dvd";
        $hasil_mysql = mysqli_query($connection, $query);
        //retrieve data every row
        while ($row = mysqli_fetch_row($hasil_mysql)) {
            $type = $row[0];
        ?>
            <li> <a href=category.php?type<?=$type?>>$type</a>;
        <?php
        }
        ?>
    </ul>
    <center>
        <hr><a href=manage01.php>management</a><br> Address : Baker Street<br>
        e-mail : <a href=mailto:dvdstore@everything.com>dvdstore@everything.com</a>
    </center>
</body>

</html>