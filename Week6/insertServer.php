<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '123456';
    $mydb = 'week6';
    $table_name = 'Products';
    $connect = mysqli_connect($host, $user, $pass, $mydb);

    $Item = $_POST["Item"];
    $Cost = $_POST["Cost"];
    $Weight = $_POST["Weight"];
    $Quantity = $_POST["Quantity"];

    $query = "INSERT INTO $table_name VALUES
    ('0', '$Item','$Cost','$Weight','$Quantity')";
    print "The Query is <i>$query</i><br>";
    print '<br><font size="4" color="blue">';
    if (mysqli_query($connect, $query)){
        print "Insert into $mydb was successful!</font>";
    } else
    {
        print "Insert into $mydb failed!</font>";
    }
    mysqli_close($connect);
