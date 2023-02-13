<html>
    <head><title>Distance and Time Calculations</title></head>
    <body>
        <?php
            $destination = $_POST["destination"];
            $cities = array ("Dallas" => 803, "Toronto" => 435, "Boston" => 848, "Nashville" => 406, "Las Vegas" => 1526, "San Francisco" => 1835, "Washington, DC"=> 595, "Miami" => 1189, "Pittsburgh" => 409);
            print "<table border=1> <th> No. <th> Destination <th> Distance <th> Driving time <th> Walking time ";
            $count = 1;
            $i;
            foreach($destination as $i){
                $distance = $cities[$i];
                $time = round( ($distance / 60), 2);
                $walktime= round( ($distance / 5), 2);
                print "<tr> <td> $count </td>";
                print "<td> $i </td>";
                print "<td> $distance </td>";
                print "<td> $time </td>";
                print "<td> $walktime </td></tr>";
                $count++;
            }
            print "</table>";
            
        ?>
    </body>
</html>