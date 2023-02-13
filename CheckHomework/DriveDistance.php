<!DOCTYPE html>
    <head><title>Welcome to the Distance Calculation Page</title></head>
    <body>
        <h1 style="text-align:center;color:blue;">Welcome to the Distance Calculation Page</h1>
        <form action="./CheckDistance.php" method="post">
        <?php
            print("The page that calculates the distance from Chicago!<br>");
            print("<select name=\"destination[]\" size=5 multiple>
                <option> Boston </option>
                <option> Dallas </option>
                <option> Las Vegas </option>
                <option> Miami </option>
                <option> Nashville </option>
                <option> Pittsburgh </option>
                <option> San Francisco </option>
                <option> Toronto </option>
                <option> Washington, DC </option>
            </select>");
            print("<br><input type=\"submit\" value=\"Send\">");
        ?>
        </form>
    </body>
</html>