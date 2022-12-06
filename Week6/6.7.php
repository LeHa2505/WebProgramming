<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
        Click on a Category to find business listings:
        <br>
        <input type="submit" value="1" name="mybutton">Automotive Parts and Supplies
        <br>
        <input type="submit" value="2" name="mybutton">Seafood Stores and Restaurants
        <br>
        <input type="submit" value="3" name="mybutton">Helath And Beaauty
        <br>
        <input type="submit" value="4" name="mybutton">Schools and Colaeges
        <br>
        <input type="submit" value="5" name="mybutton">Community Sports and Recreation
        <br>
        <br>
        <?php
        if (isset($_POST["mybutton"])) {
            $data = $_POST["mybutton"];
        }
        $server = 'localhost';
        $user = 'it4552';
        $pass = 'it4552_2022';
        $mydb = 'business_service';
        $table_name = 'Businesses';
        $conn = new mysqli($server, $user, $pass, $mydb);
        if ($conn->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
            exit();
        }
        $sql = "SELECT businessID, name, address, city, telephone, url FROM `Businesses` A WHERE A.businessID in (select B.businessID from Biz_Categories B where B.categoryID = $data)";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "id:    " . $row["businessID"] . " - Name: " . $row["name"] . " - Address:" . $row["address"] . " - City:" . $row["city"] . " - Telephone:" . $row["telephone"] . " - URL:" . $row["url"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </form>
</body>

</html>