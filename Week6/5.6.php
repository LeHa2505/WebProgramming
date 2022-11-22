<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '123456';
    $database = 'week6';
    $table_name = 'Products';
    $connect = mysqli_connect($server, $user, $pass, $database);
    $queryDesc = "SELECT Product_desc FROM $table_name";
        $results_desc = mysqli_query($connect, $queryDesc);
        print("<h2>$table_name</h2>");

        $query = "SELECT * FROM $table_name";
        print "The query is <i>$query </i><br>";
        $results_id = mysqli_query($connect, $query);
        if ($results_id) {
            print '<table border=1>';
            print '<th>Num<th>Product<th>Cost<th>Weight<th>Count';
            while ($row = mysqli_fetch_row($results_id)) {
                print '<tr>';
                foreach ($row as $field) {
                    print "<td>$field</td> ";
                }
                print '</tr>';
            }
            print "<tr>";
            print "<td> <input type=\"number\" size=\"20\" maxlength=\"20\" name=\"Num\"></td>";
            print "<td> <input type=\"text\" size=\"20\" maxlength=\"20\" name=\"Product\"></td>";
            print "<td> <input type=\"text\" size=\"20\" maxlength=\"20\" name=\"Item\"></td>";
                print "<td> <input type=\"text\" size=\"20\" maxlength=\"20\" name=\"Weight\"></td>";
                print "<td> <input type=\"text\" size=\"20\" maxlength=\"20\" name=\"Cost\"></td>";
            print "</tr>";
            mysqli_free_result($results_id);
        } else {
            die("Query=$query failed!");
        }
        mysqli_close($connect);

?>

<html>

<body>
</body>

</html>
