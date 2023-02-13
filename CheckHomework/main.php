<?php 
spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
    $path = "baitap/";
    
    $fullpath = $path.$className.'.php';
    include_once $fullpath;
}
$student1 = new Student("A",10,"5A");
$student1->__message();
$student2 = new Student("B",15,"9C");
$student2->__message();
$student2 = new Student("C",17,"12A8");
$student2->__message();
?>