<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Generate Square and Cube Values</h3>
    <form action="./loopWhile.php" method="post">
        <?php
        print ("Select Start Number");
        print ("<select name=\"start\">");
        for ($i=0; $i<10; $i++) {
        print ("<option>$i</option>");
        }
        print ("</select>");
        print ("<br>Select End Number");
        print ("<select name=\"end\">");
        for ($i=10; $i<20; $i++) {
        print "(<option>$i</option>)";
        }
        print ("</select>");
        ?>
        <br><input type="submit" value="Submit">
        <input type="reset" value="Clear and Restart">
    </form>
</body>
</html>