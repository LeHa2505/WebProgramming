<html>

<head>
    <title>Grade Calculation</title>
</head>

<body>
    <?php
        $rating = $_POST["rated"];
     switch ($rating) {
        case 1:
        $rated = "Poor";
        print "The rating was $rated";
        break;
        case 2:
        $rated = "Fair";
        print "The rating was $rated";
        break;
        case 3:
        $rated = "Good";
        print "The rating was $rated";
        break;
        default:
        print "Error: that rating does not exist";
        }
    ?> </body>

</html>