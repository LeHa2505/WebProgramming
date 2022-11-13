<html>

<head>
</head>

<body>
    <font size=4 color="blue">
        Welcome to Distance Caculation Page! </font>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="">Select destination below</label><br>
        <?php
        $array = array('Dallas' => 803, 'Toronto' => 435, 'Boston' => 848, 'Nashville' => 406, 'Las Vegas' => 1526, 'San Francisco' => 1835, 'Washington, DC' => 595, 'Miami' => 1189, 'Pittsburgh' => 409);
        print "<select name=\"list[]\" size=3 multiple>";
        foreach ($array as $key => $value) {
            print"<option value=\"$key\"> $key </option>";
        }
        ?>
        <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Clear and Restart">
    </form>
</body>
<?php
if (array_key_exists("list", $_POST)) {
    $list = $_POST["list"];
    $array = array('Dallas' => 803, 'Toronto' => 435, 'Boston' => 848, 'Nashville' => 406, 'Las Vegas' => 1526, 'San Francisco' => 1835, 'Washington, DC' => 595, 'Miami' => 1189, 'Pittsburgh' => 409);
    if (isset($list)) {
        print "<table border=1> <th> No. <th> Destination <th> Distance <th> Driving Time <th> Walking time";
        for ($i=0; $i < count($list); $i++) { 
            $dem = $i+1;
            $item = $list[$i];
            $distance = $array[$item];
            $time = round(($distance / 60), 2);
            $walktime = round(($distance / 5), 2);
            print("<tr><td>$dem</td>
                <td>$item</td>
                <td>$distance</td>
                <td>$time</td>
                <td>$walktime</td>
                </tr>");
        }
    } else {
        print "Sorry, do not have destination information for $destination.";
    }
}
?>

</html>