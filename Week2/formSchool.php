<html>
<head><title> Receiving Input </title> </head>
<body>
<font size=5>Thank You: Got Your Input.</font>
<?php
      $name = $_POST["name"];
      $class = $_POST["class"];
      $univerity = $_POST["univerity"];
      $hobby = $_POST["hobby"];
    print ("<br>Hello,  $name");     	
    print ("<br>You're studying at $class, $univerity");
    print ("<br>Your hobby is ");
    foreach($hobby as $item){
        print ("$item ");
    }
   ?>
</body>
</html>