<?php

$server = 'localhost';
$user = 'root';
$pass = '123456';
$database = 'it4552';
$table_name = 'product';
$connect = mysqli_connect($server, $user, $pass, $database);

$brand = $_POST['brand'];
$query = "SELECT * FROM $table_name WHERE(brand = '$brand')";
    print "The query is <i>$query</i> <br>";
    $results_id = mysqli_query($connect, $query);

    if ($results_id) {
        print "<br><table border=1>";
        print "<th>ID<th>Brand<th>Name<th>Color<th>Price<th>Image";
        while ($row = mysqli_fetch_row($results_id)) {
            print '<tr>';
            foreach ($row as $field) {
                print "<td>$field</td> ";
            }

            print "</tr>";
        }
        mysqli_free_result($results_id);
    }
        else { 
            die ("query=$query Failed");
        }
        mysqli_close($connect);

$queryDesc = "SELECT Product_desc FROM $table_name";
?>