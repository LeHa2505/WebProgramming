<?php
    $line = "AA1234:Hammer:122:12";
    list($partno, $part, $num, $cost) 
    = explode (":", $line, 4);
    print "partno=$partno part=$part num=$num 
    cost=$cost";
?>