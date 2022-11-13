<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">    
    Your name: <input type="text" name="name"> <br>
    <?php
        print("Date: ");
        print("<select name=\"day\">");
            for($i = 1; $i<=31; $i++) {
                print("<option>$i</option>");
            }
        print("</select>");
        print("<select name=\"month\">");
            for($i = 1; $i<=12; $i++) {
                print("<option>$i</option>");
            }
        print("</select>");
        print("<select name=\"year\">");
            for($i = 2022; $i>=0; $i--) {
                print("<option>$i</option>");
            }
        print("</select>");
        print("<br> Time: ");
        print("<select name=\"hour\">");
            for($i = 0; $i<=23; $i++) {
                print("<option>$i</option>");
            }
        print("</select>"); 
        print("<select name=\"minute\">");
            for($i = 0; $i<=59; $i++) {
                print("<option>$i</option>");
            }
        print("</select>");
        print("<select name=\"second\">");
            for($i = 0; $i<=59; $i++) {
                print("<option>$i</option>");
            }
        print("</select>");  
    ?>
    <br> <input type="submit" value="Submit">
    <input type="reset" value="Reset">
    </form> 

    <?php
    if(array_key_exists("name", $_POST)) {
        $name = $_POST["name"];
        $day = $_POST["day"];
        $month = $_POST["month"];
        $year = $_POST["year"];
        $hour = $_POST["hour"];
        $minute = $_POST["minute"];
        $second = $_POST["second"];
        $pmHour = $hour - 12;
        print("Hi $name! <br>");
        print("You have choose to have an appointment on $hour:$minute:$second, $day/$month/$year <br>");
        print("More information <br>");
        if($hour < 12) {
            print("In 12 hours, the time and date is: $hour:$minute:$second AM, $day/$month/$year<br>");
        } else {
            print("In 12 hours, the time and date is: $pmHour:$minute:$second PM, $day/$month/$year <br>");
        }
        if( $month ==  1 || $month ==  3 || $month ==  5 || $month ==  7 || $month ==  8 || $month ==  10 || $month == 12) {
            print("This month has 31 days");
        } elseif ($month ==  4 || $month ==  6 || $month ==  9 || $month ==  11) {
            print("This month has 30 days");
        } elseif($month == 2) {
            if($year % 400 == 0) {
                print("This month has 29 days");
            } elseif($year % 4 == 0 && $year % 100 != 0) {
                print("This month has 29 days");
            } else {
                print("This month has 28 days");
            }
        }
        
    }
    ?>
</body>
</html>
