<?php
// error_reporting(0); // Disable error reporting for cleaner output

// 5 city in india
$city = ["Delhi","Mumbai","Bangalore","Kolkata","Chennai"];


echo "<pre>";
print_r($city);
echo "</pre>";

echo "<hr>";
// echo "Accession 5th element of the array: " . $city[4];
echo "Accessing 6th element of the array: " . (isset($city[5]) ? $city[5] : "<span style='color:red'>Not found!</span>");

echo "<hr>";

echo "Is Lucknow comes under top poluated city in India? -" . (in_array("Lucknow", $city) ? " Yes" : " No");

echo "<hr>";

echo "2nd most polluted city in India is: " . $city[1];