<html>

<head>
    <title> Movie Shop Data Management</title>
</head>

<body>
    <center>
        <h2>Movie Shop Data Management</h2>
        <hr>
    </center>
    <?php
    include("database.php");
    $submit = $_POST['submit'];
    $title = $_POST['title'];
    $tipe = $_POST['type'];
    $name_gmb = $_POST['name_gmb'];
    $director = $_POST['director'];
    $main_lead = $_POST['writer'];
    $price = $_POST['price'];
    $desk = $_POST['desc'];
    $publication_year = $_POST['publication_year'];
    echo $submit;
    switch ($submit) {
        case "ADD":
            $query = "INSERT INTO dvd (title,tipe,name_gmb,director, main_lead,price,desk,publication_year) VALUES ('$title','$tipe','$name_gmb','$director',
            '$main_lead','$price','$desk','$publication_year')";
            $result_mysql = mysqli_query($connection, $query);
            $message = " data added successfully ";
            break;
        case "EDIT":
            $query = "UPDATE dvd SET title='$title',tipe='$tipe'";
            $query .= "name_gmb='$name_gmb',director='$director',";
            $query
                .= "main_lead='$main_lead',desk='$desk',";
            $query .= "price='$price',publication_year='$publication_year' ";
            $query .= "WHERE movie_id like $movie_id";
            $result_mysql = mysqli_query($connection, $query);
            $message = "data berhasil diubah";
            break;
        case "REMOVE":
            $query = "DELETE FROM dvd WHERE id_dvd like $id_dvd";
            $result_mysql = mysqli_query($connection, $query);
            $message = "data deleted successfully";
            break;
    }
    print("<h3>$message</h3>");
    ?>
</body>

</html>