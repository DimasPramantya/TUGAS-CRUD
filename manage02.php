<html>

<head>
    <title> Movie Shop Data Management</title>
</head>

<body>
    <center>
        <h2>Management of Movie Shop</h2>
        <hr>
        <h3>MOVIE DATA</h3>
    </center>
    <form method="POST" action="proses.php">
        <?php
        include("database.php");
        $action = $_POST['action'];
        if ($action == "ADD") {
            $movie_id = "";
            $title = "";
            $type = "";
            $name_gmb = "";
            $director = "";
            $main_lead = "";
            $price = "";
            $publication_year = "";
        } else {
            $id = $_POST['id'];
            $query = "SELECT * FROM dvd WHERE movie_id = $id";
            $result_mysql = mysqli_query($connection, $query);
            $row = mysqli_fetch_row($result_mysql);
            $movie_id = $row[0];
            $title  = $row[1];
            $type = $row[2];
            $name_gmb = $row[3];
            $director = $row[4];
            $main_lead = $row[5];
            $price = $row[6];
            $desc = $row[7];
            $publication_year = $row[8];
        } ?>
        <!-- <input type=hidden name=movie_id value=" ?= $id ?>">
        <input type=hidden name=action value="?= $action ?>"> -->
        Title Film : <input type=text name=title size="20" maxlength="30"><br>
        Desc Isi : <textarea name=desc value="<?= $desc ?>">
</textarea><br>
        Type Film : <input type=text name=type size="20" maxlength="20"><br>
        Name File Picture : <input type=text name=name_gmb size="20" maxlength="20" value="<?= $name_gmb ?>"><br>
        Director Name : <input type=text name=director size="30" maxlength="30" value="<?= $director ?>"><br>
        Main lead Name : <input type=text name=writer size="30" maxlength="30" value="<?= $main_lead ?>"><br>
        Price : Rp <input type=text name=price size="20" maxlength="20" value="<?= $price ?>"><br>
        Publication Year : <input type=text name=publication_year size="20" maxlength="20" value="<?= $publication_year ?>"><br>
        <input type=submit value=<?= $action ?> name="submit">
    </form>
    <center>
        <hr>
        Address : Baker Street<br> e-mail : <a href=mailto:dvdstore@everything.com>dvdstore@everything.com</a>
    </center>
</body>

</html>