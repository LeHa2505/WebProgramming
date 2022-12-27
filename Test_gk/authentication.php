<?php
$server = 'localhost';
$user = 'root';
$pass = '123456';
$database = 'it4552';
$table_name = 'user';
$connect = mysqli_connect($server, $user, $pass, $database);

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM $table_name WHERE (username='$username' and password='$password')";
$result = mysqli_query($connect, $query);

if ($result) {
    print("Đăng nhập thành công");
    mysqli_free_result($result);
    print("<br>Thêm sản phẩm");
    print 'brand: <input type="text" name=\"brand\"> <br>';
    print 'name: <input type="text" name=\"name\"> <br>';
    print 'color: <input type="text" name=\"color\"> <br>';
    print 'price: <input type="text" name=\"price\"> <br>';
    print '<button type="submit">Submit</button>';

    $brand = $_POST["brand"];
    $name = $_POST["name"];
    $color = $_POST["color"];
    $price = $_POST["price"];
    $image = $_POST["image"];

    // $query = "INSERT INTO product VALUES
    // ('0', '$brand','$name','$color','$price', '$image')";
    // print "The Query is <i>$query</i><br>";
    // print '<br><font size="4" color="blue">';
    // if (mysqli_query($connect, $query)) {
    //     print "Insert into $mydb was successful!</font>";
    // } else {
    //     print "Insert into $mydb failed!</font>";
    // }
    // mysqli_close($connect);
} else {
    print("Không đúng password hoặc username");
}
mysqli_close($connect);
