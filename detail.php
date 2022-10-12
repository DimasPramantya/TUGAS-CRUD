<html>

<head>
    <title>Movie Shop</title>
</head>

<body>
    <center>
        <h2>Welcome to Movie Shop</h2>
        <hr>
    </center>
    <h3> The following is the details of the film you chose</h3>
    <table border=1>
        <?
        include("database.php");
        $query = "SELECT * FROM dvd WHERE movie_id=$id";
        $hasil_mysql = mysqli_query($$connection, $query);
        $row = mysqli_fetch_row($hasil_mysql);
        $title
            = $row[1];
        $type
            = $row[2];
        $name_gmb
            = $row[3];
        $director
            = $row[4];
        $main_lead
            = $row[5];
        $price
            = $row[6];
        $desc
            = $row[7];
        $publication_year = $row[8];
        ?>
        <tr valign="top">
            <td><img src=./image/<? print("$name_gmb"); ?> height=150></td>
            <td>
                <p>TITLE<br><i><b><? print("$title"); ?></b></i></p>
                <p><i><b><? print("$desc"); ?></b></i></p>
                <p>TYPE<br><i><b><? print("$type"); ?></b></i></p>
                <p>DIRECTOR<br><i><b><? print("$director"); ?></b></i></p>
                <p>MAIN LEAD<br><i><b><? print("$main_lead"); ?></b></i></p>
                <p>PRICE<br><i><b>Rp <? print("$price"); ?></b></i></p>
                <p>PUBLICATION
                    YEAR<br><i><b><? print("$publication_year"); ?></b></i></p>
            </td>
        </tr>
    </table><br>
    <center>
        <hr>
        Address : Baker Street<br>
        e-mail : <a href=mailto:dvdstore@everything.com>dvdstore@ everything.com</a>
    </center>
</body>

</html>