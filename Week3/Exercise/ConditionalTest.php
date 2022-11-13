<?php
$fisrtName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$middleName = $_POST["middleName"];
print("Hi $lastName! Your full name is $fisrtName $middleName $lastName<br>");

if ($fisrtName < $lastName) {
    print ("$fisrtName is less than $lastName <br>");
    } else {
    print ("$fisrtName is greater than $lastName");
    }
$midterm = $_POST["midterm"];
$final = $_POST["final"];
$average = ($midterm + $final) / 2;
if ($average > 89) {
    print("<br>Average=$average. You got an A");
} elseif ($average > 79) {
    print("<br>Average=$average. You got a B");
} elseif ($average > 69) {
    print("<br>Average=$average. You got a C");
} elseif ($average > 59) {
    print("<br>Average=$average. You got a D");
} elseif ($average >= 0) {
    print("Grade=$grade. You got an F");
} else {
    print("Illegal average less than 0 average=$average");
}
$max = $midterm;
if ($midterm < $final) {
    $max = $final;
}
print("<br>Your max score was $max");
?>