<?php
    $part = "AA100";
    $pattern = "/^AA/";
    if (preg_match($pattern, $part)) {
        print 'Match';
    } else {
        print 'No match';
    }
?>