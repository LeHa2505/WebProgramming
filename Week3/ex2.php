<html>
<head><title>Decisions</title></head>
<body>
<?php
$string1= $_POST["string1"];
$string2= $_POST["string2"];
if ($string1 == $string2)
    {
        print ("$string1 is equal to $string2" );
        } else {
        print ("$string1 is not equal to $string2");
    }
if ($string1 < $string2) {
    print ("$string1 is less than $string2 <br>");
    } else {
    print ("$string1 is not less than $string2");
    }
?>
</body>
</html>