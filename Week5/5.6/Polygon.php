<?php
    include_once "./Shape.php";

    abstract class Polygon extends Shape
    {
        abstract function getNumberOfSides();
        
        public static function Hello() {
            echo "Hello";
        }
    }
?>