<html>

<body>
    <form action="" method="POST">
        <input type="radio" name="id" value="AC1000"> AC1000
        <input type="radio" name="id" value="AC1001"> AC1001
        <input type="radio" name="id" value="AC1002"> AC1002
        <input type="radio" name="id" value="AC1003"> AC1003

        <br><input type="submit" value="Submit">
        <input type="reset" value="Clear and Restart">
    </form>
</body>

<?php
if (array_key_exists("id", $_POST)) {
    $id = $_POST["id"];
    $inventory = array(
        'AC1000' => array('Part' => 'Hammer', 'Count' => 122, 'Price' => 12.50),
        'AC1001' => array('Part' => 'Wrench', 'Count' => 5, 'Price' => 5.00),
        'AC1002' => array('Part' => 'Handsaw', 'Count' => 10, 'Price' => 10.00),
        'AC1003' => array('Part' => 'Screwdrivers', 'Count' => 222, 'Price' => 3.00)
    );
    if (isset($inventory[$id])) {
        print '<font size=4 color="blue"> ';
        print "Inventory Information for Part $id </font>";
        print '<table border=1> <th> ID <th> Part <th> Count <th> Price ';
        print "<tr> <td> $id </td>";
        print "<td> {$inventory[$id]['Part']} </td>";
        print "<td> {$inventory[$id]['Count']} </td>";
        print "<td> \${$inventory[$id]['Price']} </td></tr>";
    } else {
        print "Illegal part ID = $id ";
    }
}
?>

</html>