<html><head><title>Search Results</title></head><body>
<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '123456';
    $mydb = 'week6';
    $table_name = 'Products';
    $connect = mysqli_connect($server, $user, $pass, $mydb);

    $Search = $_POST["Search"];

    print '<font size="5" color="blue">';
    print "$table_name Data</font><br>";
    $query = "SELECT * FROM $table_name WHERE(Product_desc = '$Search')";
    print "The query is <i>$query</i> <br>";
    $results_id = mysqli_query($connect, $query);

    if ($results_id) {
        print "<br><table border=1>";
        print "<th>Num<th>Product<th>Cost<th>Weight <th>Count";
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
            die ("query=$Query Failed");
        }
        mysqli_close($connect);
?>

