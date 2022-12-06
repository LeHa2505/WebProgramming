<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" size="10" maxlength="10" name="date">
        <br>
        <button type="submit">SUBMIT</button>
        </form>
    </body>
</html>

<?php
    if (array_key_exists("date", $_POST)) {

    $check_month="[0-1][[:digit:]]";
    $check_day="[0-3][[:digit:]]";
    $check_year="2[[:digit:]]{3}";
    
    $date = $_POST["date"];
    // if (preg_match("/^($check_month)\/($check_day)\/($check_year)$/", $date ))
    // {
    //     print "Valid date = $date";
    //     } else {
    //     print "Invalid date = $date";
    //     }
    // } 

    list($month, $day, $year) = explode( "/", $date );
    if ($month=1 || $month=3 || $month=5 || $month=7 || $month=8 || $month=10 || $month=12) {
        if ($day>=1 && $day<=31) {
            print "Valid date mon=$month day=$day year=$year";
        }
        else print "Invalid date";
    }
    elseif ($month=4 || $month=6 || $month=9 || $month=11) {
        if ($day>=1 && $day<=30) {
            print "Valid date mon=$month day=$day year=$year";
        }
        else print "Invalid date";
    }
    elseif ($month=2) {
        if ($year % 4 == 0 && $year % 100 != 0 && $year % 400 == 0) 
        {
            if ($day>=1 && $day<=29) {
                print "Valid date mon=$month day=$day year=$year";
            } else print "Invalid date";
        } else
        {
            if ($day>=1 && $day<=28) {
                print "Valid date mon=$month day=$day year=$year";
        } else print "Invalid date";
    }
    }
}
?>