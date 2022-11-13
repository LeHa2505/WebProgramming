<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
        <label for="name1">Enter First Name</label><br>
        <input type="text" name="name1" id="">
        </div>

        <div>
        <label for="date1">Enter Birthday</label><br>
        <input type="date" name="date1" id="">
        </div>

        <div>
        <label for="name2">Enter Second Name</label><br>
        <input type="text" name="name2" id="">
        </div>

        <div>
        <label for="date2">Enter Birthday</label><br>
        <input type="date" name="date2" id="">
        </div>
        <br>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

    <?php
        $firstName =  $_POST["name1"];
        $secondName =  $_POST["name2"];
        $firstDate = $_POST["date1"];
        $secondDate = $_POST["date2"];
        printf("To $firstName, ");
        $date1 = date_create("$firstDate");
        echo date_format($date1,"l, F d, Y");
        print("<br>");
        printf("To $secondName, ");
        $date2 = date_create("$secondDate");
        echo date_format($date2,"l, F d, Y");

        function DiffDate($date1, $date2){
            $diff = strtotime($date1) - strtotime($date2);
            return abs(round($diff/86400));
        }

        $dateDiff = DiffDate($firstDate, $secondDate);
        print("<br>The difference in days between two dates: $dateDiff");
        $age1 = round(DiffDate(date("Y-m-d"), $firstDate)/365);
        print("<br>$firstName is $age1 years old");
        $age2 = round(DiffDate(date("Y-m-d"), $secondDate)/365);
        print("<br>$secondName is $age2 years old");
        $diffYear = round(DiffDate($firstDate, $secondDate)/365);
        print("<br>The difference years between two persons: $diffYear");
    ?>
</body>
</html>
