<html>

<head>
    <title>Grade Calculation</title>
</head>

<body>
    <?php
    $grade1 = $_POST["grade1"];
    $grade2 = $_POST["grade2"];
    $average = ($grade1 + $grade2) / 2;
    if ($average > 89) {
        print("Average=$average. You got an A");
    } elseif ($average > 79) {
        print("Average=$average. You got a B");
    } elseif ($average > 69) {
        print("Average=$average. You got a C");
    } elseif ($average > 59) {
        print("Average=$average. You got a D");
    } elseif ($average >= 0) {
        print("Grade=$grade. You got an F");
    } else {
        print("Illegal average less than 0 average=$average");
    }
    $max = $grade1;
    if ($grade1 < $grade2) {
        $max = $grade2;
    }
    print("<br>Your max score was $max");
    ?> </body>

</html>