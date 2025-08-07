<?php

// add 5 element
$arr1 = ['ram', 'aam', 'saam', 'kaam', 'maam'];
$arr2 = ['amit', 'sumit'];
$arr3 = ['mohit'];

echo "<pre>";
print_r($arr1);
print_r($arr2);
print_r($arr3);
echo "</pre>";

echo "<hr>";

/**
 * 
 * Single line solution array_merge
 * 
 */

// $final = array_merge($arr1, $arr2, $arr3);



/**
 * 
 * Mutli line solution loop on each array
 * 
 */

$final = [];

foreach($arr1 as $value) {
    $final[] = $value;
}

foreach($arr2 as $value) {
    $final[] = $value;
    
    // use array_push to add elements
    // array_push($final, $value);
}

foreach($arr3 as $value) {
    $final[] = $value;
}


echo "<pre>";
print_r($final);
echo "</pre>";