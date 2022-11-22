<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update results</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <?php
        $server = 'localhost';
        $user = 'root';
        $pass = '123456';
        $database = 'week6';
        $table_name = 'Products';
        $connect = mysqli_connect($server, $user, $pass, $database);
        $queryDesc = "SELECT Product_desc FROM $table_name";
        $results_desc = mysqli_query($connect, $queryDesc);
        if ($results_desc) {

            while ($row = mysqli_fetch_row($results_desc)) {

                foreach ($row as $field) {
                    print "<input type=\"radio\" name=\"desc\" value \"$field\"> $field <br>";
                }
            }
            mysqli_free_result($results_desc);
        }
        print ' <input type="submit" value="Submit"><input type="reset" value="Reset">

        </form>';



        if (array_key_exists('desc', $_POST)) {
            $desc = $_POST['desc'];

            $query = "Update $table_name set Numb = Numb-1 where (Product_desc = '$desc')";
            print("The query is <i>$query</i><br>");
            print '<br><font size="4" color="blue">';
            if (mysqli_query($connect, $query)) {
                print("Update $database was successful!</font>");
            } else {
                print("Update $database failed!</font>");
            }
        }


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
            mysqli_free_result($results_id);
        } else {
            die("Query=$query failed!");
        }
        mysqli_close($connect);
        ?>
        </table>
</body>

</html>