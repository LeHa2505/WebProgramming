<html><head><title>Table Output</title></head><body>
<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '123456';
    $mydb = 'week6';
    $table_name = 'Products';
    $connect = mysqli_connect($host, $user, $pass, $mydb);

    print '<font size="5" color="blue">';
    print "$table_name Data</font><br>";
    $query = "SELECT * FROM $table_name";
    print "The query is <i>$query </i><br>";
    $results_id = mysqli_query($connect, $query);
    if ($results_id) {
        print '<table border=1>';
        print '<th>Num<th>Product<th>Cost<th>Weight<th>Count';
        while ($row = mysqli_fetch_row($results_id)){
            print '<tr>';
            foreach ($row as $key) {
                print "<td>$key</td>";
            }
            print "</tr>";
        }
        mysqli_free_result($results_id); 
    } else {
        die ("Query=$query failed!");
    }
    mysqli_close($connect);
?>