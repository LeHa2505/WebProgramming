<html>

<head>

</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="radio" name="Action" value="Add"> Add
        <input type="radio" name="Action" value="Unknown"> Unknown
        <br>
        Enter Index:
        <input type="text" name="index" size=10>
        Enter Value:
        <input type="text" name="value" size=10>
        <br><input type="submit" value="Submit">
        <input type="reset" value="Clear and Restart">

    </form>

</body>
<?php
if (array_key_exists("index", $_POST)) {
    $index = $_POST["index"];   
    $Value = $_POST["value"];
    $Action = $_POST["Action"];
    $_SESSION["invent"] = array('Nuts' => 44, 'Nails' => 34, 'Bolts' => 31);
    session_start();
    if(!isset($_SESSION["invent"]))
    {
    $_SESSION["invent"] = array('Nuts' => 44, 'Nails' => 34, 'Bolts' => 31);
    }
    if ($Action == 'Add') {
        if (isset($invent["$index"])) {
            print "Sorry, already exists $index <br>";
        } else {
            $invent["$index"] = $Value;
            print "Adding index=$index value=$Value <br>";
            print '-----<br>';
            foreach ($_SESSION["invent"] as $index => $item) {
                print "Index is $index, value is $item.<br> ";
            }
        }
    } else {
        print "Sorry, no such action=$Action<br>";
    }
}
?>

</html>