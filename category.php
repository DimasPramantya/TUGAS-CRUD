<html>
<head>
    <title>Movie Shop</title>
</head>

<body>
    <center>
        <h2>Welcome to Movie Shop </h2>
        <hr>
    </center>
    <?php
    print("<h3> The following is a list of films by category
$type</h3>");
    print("<table border=1>");
    include("database.php");
    $query = "SELECT movie_id,title,name_gmb,director FROM dvd ";
    $query .= "WHERE type='$type'";
    $hasil_mysql = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_row($result_mysql)) {
        $movie_id = $row[0];
        $title = $row[1];
        $name_gmb = $row[2];
        $director = $row[3];
        print("<tr><td><img src=./image/$name_gmb height=50></td>");
        print("<td><b><a href=detail.php?id=$movie_id>$title</a></b>
<br>$director</td></tr>");
    }
    print("</table>");
    ?>
    <center>
        <hr>
        Address : Baker Street<br> e-mail : <a href=mailto:dvdstore@everything.com>dvdstore@everything.com</a>
    </center>
</body>

</html>