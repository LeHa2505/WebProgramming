<html>
    <head>
        <title>
            lap 6.5
        </title>
    </head>
<body>
    <h1>Category Administration</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php
            $server = 'localhost';
            $user = 'it4552';
            $pass = 'it4552_2022';
            $database = 'business_service';
            $connect = mysqli_connect($server, $user, $pass, $database);
            $table_name = 'Categories';
            if(!$connect){
                die("Cannot connect to $server using $user");
            }else{
                if(array_key_exists("submitted",$_POST)){
                    $cartid = $_POST['cartId'];
                    $title = $_POST['title'];
                    $description = $_POST['description'];
                    $query = "INSERT into $table_name values ('$cartid', '$title', '$description')";
                    if(!mysqli_query($connect, $query)){
                        print "Insert into $database failed!</font>";
                    }
                }
                $print = "SELECT * from $table_name";
                $result = mysqli_query($connect, $print);
                if($result){
                    print'<table border=1>';
                    print'<th>CartID<th>Title<th>Description';
                    while($row = mysqli_fetch_row($result)){
                        print'<tr>';
                        foreach($row as $field){
                            print "<td>$field</td>";
                        }
                        print'</tr>';
                    }
                    mysqli_free_result($result);
                }             
            }
            mysqli_close($connect);
        ?>
            <tr>
                <td>
                    <input type="text" name="cartId">
                </td>
                <td>
                    <input type="text" name="title">
                </td>
                <td>
                    <input type="text" name="description">
                </td>
            </tr>
        </table>
        <input type="submit" value="Add category" name="submitted">
    </form>
</body>
</html>